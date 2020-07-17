FROM php:7.3.10-apache-stretch

SHELL ["/bin/bash", "-o", "pipefail", "-c"]

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini" \
    && sed -i 's|variables_order = "GPCS"|variables_order = "EGPCS"|' "$PHP_INI_DIR/php.ini" \
    && docker-php-ext-install pdo_mysql \
    && pecl install xdebug-beta \
    && docker-php-ext-enable xdebug

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-jpeg-dir=/usr/include \
    && docker-php-ext-configure calendar \
    && docker-php-ext-install gd calendar

COPY conf.d/xdebug.ini $PHP_INI_DIR/conf.d/xdebug.ini
COPY default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

WORKDIR /var/www/project
