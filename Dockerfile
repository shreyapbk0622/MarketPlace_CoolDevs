FROM php:8.2-apache
WORKDIR /var/www/html
COPY ./src /var/www/html
RUN docker-php-ext-install mysqli
EXPOSE 80
CMD ["apache2-foreground"]
