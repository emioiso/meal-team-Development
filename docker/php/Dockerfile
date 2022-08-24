# FROM php:8.1.4-fpm-alpine3.14
FROM php:8.0.22-zts-alpine3.16

WORKDIR /var/www/html/laravel

# 依存ライブラリのインストール
RUN apk upgrade
RUN apk update

RUN apk add git gmp gmp-dev libmcrypt \
    libzip libzip-dev libxml2 libxml2-dev \
    libmemcached libmemcached-dev \
    oniguruma oniguruma-dev \
    openssh-client make grep autoconf gcc libc-dev zlib-dev cyrus-sasl-dev libmemcached-dev zlib-dev && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    docker-php-ext-install gmp xml mbstring pdo dom pdo_mysql zip

ENV TZ Asia/Tokyo
ENV COMPOSER_ALLOW_SUPERUSER 1

# composerのインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
