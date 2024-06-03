FROM php:5.6-apache

WORKDIR /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]