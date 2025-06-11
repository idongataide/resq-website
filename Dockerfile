# Use an official PHP image with Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite (commonly needed for PHP apps)
RUN a2enmod rewrite

# Copy your PHP app to the Apache root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Set recommended permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (Apache default)
EXPOSE 80 