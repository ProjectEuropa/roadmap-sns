FROM php:7.4-fpm

# install composer
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php -- --install-dir=/usr/bin --1 && ln -s /usr/bin/composer.phar /usr/bin/composer
RUN apt update \
&& apt install -y \
git \
zip \
unzip \
vim \
libfreetype6-dev libjpeg62-turbo-dev libpng-dev

RUN apt update \
    && apt install -y libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql mysqli

RUN composer config -g repos.packagist composer https://packagist.jp && composer global require hirak/prestissimo

WORKDIR /var/www/html
