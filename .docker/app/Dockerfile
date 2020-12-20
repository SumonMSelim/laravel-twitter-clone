FROM php:7.4-fpm-alpine
MAINTAINER Muhammad Sumon Molla Selim <sumonmselim@gmail.com>

ENV PECL_EXTENSIONS="pcov psr redis xdebug"
ENV PHP_EXTENSIONS="bz2 exif gd gettext intl pcntl pdo_mysql zip"

# Install system dependencies
RUN apk add --no-cache --virtual .build-deps \
    $PHPIZE_DEPS libtool \
    && apk add --no-cache bzip2-dev gettext-dev git icu icu-dev libintl libpng-dev libzip-dev mysql-client \
    # Install and enable PECL extensions
    && docker-php-source extract \
    && pecl channel-update pecl.php.net \
    && pecl install $PECL_EXTENSIONS \
    && cd /usr/src/php/ext/ \
    && docker-php-ext-enable $PECL_EXTENSIONS \
    && docker-php-ext-configure opcache --enable-opcache \
    # Install and enable PHP extensions
    && docker-php-ext-install -j "$(nproc)" $PHP_EXTENSIONS \
    # Clean up
    && apk del -f .build-deps \
    && cd /usr/local/etc/php/conf.d/ \
    && pecl clear-cache \
    && docker-php-source delete \
    && rm -rf /var/cache/apk/* /tmp/* /var/tmp/* /usr/share/doc/* /usr/share/man/*

# Install latest composer with prestissimo
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory and non-root user
WORKDIR /var/www/html
USER www-data
