FROM php:8.0-cli

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

EXPOSE 10000

CMD ["php", "-S", "0.0.0.0:10000"]
