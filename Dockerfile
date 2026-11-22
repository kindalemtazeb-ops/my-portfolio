FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libsqlite3-dev \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd

# Enable Apache mod_rewrite (ለ Laravel .htaccess የግድ አስፈላጊ)
RUN a2enmod rewrite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./

RUN composer install --no-dev --optimize-autoloader --no-scripts

COPY . /var/www/html

RUN composer dump-autoload --optimize

# Prepare database and storage
RUN mkdir -p database storage/framework/sessions storage/framework/views storage/framework/cache \
    && touch database/database.sqlite

# Configure Apache document root to public folder & allow .htaccess (AllowOverride All)
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Set full permissions for www-data
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/database /var/www/html/bootstrap/cache

EXPOSE 80
CMD php artisan migrate --force --seed && php artisan config:clear && php artisan cache:clear && apache2-foreground
