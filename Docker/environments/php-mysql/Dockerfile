FROM php:8.2-cli
COPY example_app/ /var/www/html
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
EXPOSE 80

