FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    && docker-php-ext-install pdo pdo_mysql mysqli

COPY php.ini /usr/local/etc/php/

WORKDIR /var/www/html
