FROM php:8.2-apache

# Instala extensiones necesarias para Symfony
RUN docker-php-ext-install pdo pdo_mysql

# Habilita mod_rewrite para Symfony
RUN a2enmod rewrite

# Copia el código fuente al contenedor
COPY . /var/www/html/

# Cambia el DocumentRoot a /var/www/html/public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Da permisos a la carpeta var
RUN mkdir -p /var/www/html/var && chown -R www-data:www-data /var/www/html/var

# Instala utilidades necesarias para Composer y Symfony
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip

# Instala la extensión zip de PHP
RUN docker-php-ext-install zip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala dependencias PHP
RUN composer install --no-interaction --optimize-autoloader

EXPOSE 80

CMD ["apache2-foreground"]
