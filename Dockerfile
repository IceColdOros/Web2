FROM php:8.2-apache

RUN a2enmod rewrite

COPY . /var/www/html/

RUN echo "DirectoryIndex loginPage.php" > /var/www/html/.htaccess

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

EXPOSE 80

CMD ["apache2-foreground"]