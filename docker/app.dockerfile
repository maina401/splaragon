FROM php:8.1-fpm

RUN apt-get update && apt-get install -y  \
    libfreetype6-dev \
    libjpeg-dev \
    libpng-dev \
    libwebp-dev \
    libzip-dev \
    libcurl4-openssl-dev \
    --no-install-recommends \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql bcmath exif pcntl zip \
    && apt-get clean

FROM composer:2.5.7 AS composer

RUN composer install --no-dev --no-interaction --no-progress --no-suggest --optimize-autoloader

RUN chown -R www-data:www-data /var/www/html

