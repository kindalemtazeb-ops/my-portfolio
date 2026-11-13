FROM php:8.2-apache

# Install system dependencies and Composer
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files first to cache dependencies
COPY composer.json composer.lock ./

# Install vendor dependencies inside the container
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Copy the rest of the application
COPY . /var/www/html

# Run composer dump-autoload to ensure everything links properly
RUN composer dump-autoload --optimize

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
CMD php artisan config:cache && php artisan route:cache && apache2-foreground