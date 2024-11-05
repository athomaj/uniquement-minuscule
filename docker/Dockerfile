# Use the official PHP image with Apache
FROM php:8.1-apache

# Install dependencies for SQLite
RUN apt-get update && \
	apt-get install -y libsqlite3-dev && \
	docker-php-ext-install pdo_sqlite
# Copy application code to the web server root
COPY . /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
	&& chmod -R 755 /var/www/html
