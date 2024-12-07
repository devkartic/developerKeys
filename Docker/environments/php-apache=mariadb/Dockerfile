FROM php:8.2-cli
COPY src/ /var/www/html
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
EXPOSE 80

