FROM php:8.2-apache

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY . .

RUN echo "<IfModule dir_module>\nDirectoryIndex index.php index.html\n</IfModule>" >> /etc/apache2/apache2.conf

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80

CMD ["apache2-foreground"]