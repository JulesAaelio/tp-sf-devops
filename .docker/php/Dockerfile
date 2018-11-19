FROM php:7.1-fpm

#Install php extensions
RUN apt-get update
RUN apt-get install -y \
    libpng-dev \
    git \
    apt-utils \
    sudo \
    libssl-dev

RUN docker-php-ext-install \
    gd \
    zip \
    pdo_mysql \

RUN usermod -u 1000 www-data
RUN groupmod -g 1000 www-data
#Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN chown -R www-data:www-data /var/www
USER 1000:1000

WORKDIR /var/www/symfony