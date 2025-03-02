FROM php:8.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Set ServerName to avoid warnings
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Copy project files
COPY . /var/www/html/

# Restart Apache to apply changes
RUN service apache2 restart

# Expose port
EXPOSE 80

