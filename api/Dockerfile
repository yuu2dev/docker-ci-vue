FROM php:7.4-fpm

RUN apt-get update && apt-get install -y --no-install-recommends \
        vim \
        libicu-dev \
        zlib1g-dev \
        libzip-dev \
        unzip \
    && docker-php-ext-install \
        zip \
        intl \
        mysqli \
        pdo \ 
        pdo_mysql

CMD [ "php-fpm" ]

EXPOSE 9000
