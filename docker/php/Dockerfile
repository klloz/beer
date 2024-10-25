FROM php:8.3.0-fpm

WORKDIR "/var/www/html"

RUN apt-get update && apt-get install -qq -y --no-install-recommends  \
    locales coreutils apt-utils git libicu-dev \
    g++ libpng-dev libxml2-dev libzip-dev libonig-dev \
    libxslt-dev libpq-dev libssl-dev

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer

RUN docker-php-ext-install intl

RUN docker-php-ext-install pdo pdo_pgsql opcache intl calendar dom mbstring zip gd xsl
