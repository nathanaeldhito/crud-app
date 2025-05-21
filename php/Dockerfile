FROM php:8.1-apache

# Install ekstensi PHP yang diperlukan
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable mod_rewrite untuk Apache
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Pastikan Apache dapat menulis ke direktori 
RUN chown -R www-data:www-data /var/www/html