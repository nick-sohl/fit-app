# Use official PHP with Apache image
FROM php:8.2-apache

# Copy your public HTML/JS/CSS files to the web root
COPY public/ /var/www/html/

# Copy your PHP script
COPY php/ /var/www/html/

# Enable Apache rewrite module (optional, useful if you want clean URLs later)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]

