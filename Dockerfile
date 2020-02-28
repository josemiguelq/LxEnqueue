FROM php:7.2-fpm-alpine3.7

RUN apk add --no-cache \
		$PHPIZE_DEPS \
		openssl-dev \
		librdkafka-dev \
        libzip-dev

RUN pecl install -f rdkafka-3.1.3

RUN docker-php-ext-enable rdkafka

WORKDIR /app

CMD ["php-fpm"]
