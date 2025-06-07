FROM php:8.2-apache

# Enable Apache mod_rewrite for clean URLs
RUN a2enmod rewrite

# Copy all your app files into the container
COPY . /var/www/html/

# Set permissions (optional but useful for some platforms)
RUN chown -R www-data:www-data /var/www/html

# Enable .htaccess usage
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
