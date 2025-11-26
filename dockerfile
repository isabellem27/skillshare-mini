FROM php:8.3-apache

#Extensions PHP pour Symfony + MySQL
RUN docker-php-ext-install pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --quiet

#Activer mod_rewrite pour les URLs Symfony
RUN a2enmod rewrite

#Utiliser notre vhost
COPY apache/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html