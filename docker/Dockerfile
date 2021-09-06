FROM php:7.4-alpine

ARG user=php-console
ARG uid=1000

RUN apk add --no-cache $PHPIZE_DEPS

RUN pecl install xdebug && docker-php-ext-enable xdebug

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN addgroup -S appgroup && adduser -S $user -u $uid -G appgroup

USER $user

WORKDIR /app

