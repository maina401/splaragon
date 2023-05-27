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

RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    zip \
    unzip \
    && apt-get clean

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install --no-dev --no-interaction --no-progress --no-suggest --optimize-autoloader

RUN chown -R www-data:www-data /var/www/html

