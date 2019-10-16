FROM php:7.3-fpm-stretch

WORKDIR /usr/share/nginx/html

RUN apt-get -qq update && apt-get -qq -y --no-install-recommends install ca-certificates git zip unzip libzip-dev && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure zip --with-libzip && docker-php-ext-install mbstring zip pcntl posix

RUN pecl install xdebug && docker-php-ext-enable xdebug

# COMPOSER INSTALLATION
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN php -r "copy('https://getcomposer.org/installer', '/tmp/composer-setup.php');" &&\
        php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer &&\
        rm /tmp/composer-setup.php

RUN composer global require hirak/prestissimo
