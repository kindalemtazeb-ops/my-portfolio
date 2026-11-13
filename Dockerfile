FROM php:8.2-apache

# Install Node.js for building frontend assets
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy composer files first
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Copy package files for Node dependencies
COPY package.json package-lock.json* ./
RUN npm install

# Copy the rest of the application code
COPY . /var/www/html

# Run Vite build AFTER copying all project files so manifest.json is generated correctly
RUN npm run build

RUN composer dump-autoload --optimize

# Prepare database and storage
RUN mkdir -p database storage/framework/sessions storage/framework/views storage/framework/cache \
    && touch database/database.sqlite

# Configure Apache document root to public folder
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Set full permissions for www-data
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/database /var/www/html/bootstrap/cache

EXPOSE 80
CMD php artisan migrate --force && php artisan config:clear && php artisan cache:clear && apache2-foreground