FROM php:8.1-apache

# Enable .htaccess
RUN a2enmod rewrite

# Copy your PHP files into the container
COPY . /var/www/html/
