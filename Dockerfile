FROM php:8.1-fpm

WORKDIR /var/www/app

RUN apt update && apt install -y \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev

RUN docker-php-ext-install pdo pdo_pgsql

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

USER root

RUN chown -R www-data:www-data /var/www/app

RUN chown -R $USER:www-data /var/www/app 
RUN chown -R $USER:www-data /var/www/app

RUN chmod -R 775 /var/www/app
RUN chmod -R 775 /var/www/app


# Install npm
RUN apt-get update && apt-get install -y npm
