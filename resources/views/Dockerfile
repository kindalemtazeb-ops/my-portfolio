# 1. PHP 8.2 ከ Apache ጋር ተጠቀም
FROM php:8.2-apache

# 2. ለ Laravel የሚያስፈልጉ ሲስተም ጥቅሎችን ጫን
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    git \
    curl

# 3. PHP extensions ጫን (PostgreSQL ጭምር)
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd

# 4. Apache mod_rewrite እንዲሰራ አድርግ (ለ Laravel routing ወሳኝ ነው)
RUN a2enmod rewrite

# 5. Composer ጫን
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 6. የፕሮጀክት ፋይሎችን ወደ Docker ኮፒ አድርግ
WORKDIR /var/www/html
COPY . .

# 7. ለ Laravel የሚያስፈልጉ Permissions ስጥ
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 8. Apache የ Laravel 'public' ፎልደርን እንዲያነብ ቀይረው
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 9. ፖርት 80ን ክፈት
EXPOSE 80

# 10. Apacheን አስነሳ
CMD ["apache2-foreground"]
