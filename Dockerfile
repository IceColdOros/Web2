# Use PHP 8.2 with Apache
FROM php:8.2-apache

# Install MySQLi extension for PHP
RUN docker-php-ext-install mysqli

# Copy all files into Apache root directory
COPY . /var/www/html/

# Enable URL rewriting for clean URLs (optional)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Set permissions for Apache
RUN chown -R www-data:www-data /var/www/html
