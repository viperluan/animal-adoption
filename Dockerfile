FROM php:8.1.14-fpm

ENV USERNAME=animal-adoption
ENV USER_UID=1000
ENV USER_GID=$USER_UID

USER root

RUN apt-get update && apt-get upgrade -y && apt-get install -y libpq-dev

RUN groupadd -g $USER_GID $USERNAME \
    && useradd -g $USER_GID -u $USER_UID $USERNAME

RUN docker-php-ext-install pdo_pgsql

USER $USERNAME

WORKDIR /www
