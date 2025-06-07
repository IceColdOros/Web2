# Use official PHP image with Apache
FROM php:8.1-apache

# Enable mod_rewrite (used in many PHP apps)
RUN a2enmod rewrite

# Copy all files to Apache's web root
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
