FROM php:8.0.12-apache
COPY src/ /var/www/html
EXPOSE 80