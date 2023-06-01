FROM php:7.4-apache

# Copy the web application files to the container
#COPY . /var/www/html
WORKDIR /var/www/html

RUN apt-get update -y && apt-get install -y libmariadb-dev

RUN a2enmod rewrite
#RUN sed -i '/LoadModule rewrite_module/s/^#//g' /usr/local/apache2/conf/httpd.conf