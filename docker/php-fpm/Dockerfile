FROM php:8.2-fpm

RUN apt-get update \
    && docker-php-ext-install pdo_mysql
    
COPY xdebug.ini "{PHP_INI_DIR}/conf.d"
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

