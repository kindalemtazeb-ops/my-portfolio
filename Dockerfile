FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./

RUN composer install --no-dev --optimize-autoloader --no-scripts

COPY . /var/www/html

RUN composer dump-autoload --optimize

# Explicitly update Apache document root to public folder in default config
RUN sed -i 's!DocumentRoot /var/www/html!DocumentRoot /var/www/html/public!g' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's!<Directory /var/www/html>!<Directory /var/www/html/public>!g' /etc/apache2/apache2.conf \
    && sed -i 's!/var/www/html/!/var/www/html/public/!g' /etc/apache2/apache2.conf

# Set proper permissions for storage and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
CMD php artisan key:generate --force && php artisan config:cache && php artisan route:cache && apache2-foreground