FROM php:8.2-fpm

RUN apt update && apt install -y nginx awscli

COPY . /var/www/html
COPY default.conf /etc/nginx/sites-available/default

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD service nginx start && php-fpm
