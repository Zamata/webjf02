# Usa una imagen de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    zip \
    unzip \
    libpq-dev \   # ✅ Agrega esta línea para instalar PostgreSQL dev
    && docker-php-ext-install gd pdo pdo_mysql pdo_pgsql

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar el directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias
RUN composer install --no-dev --optimize-autoloader

# Dar permisos a storage y bootstrap/cache
RUN chmod -R 777 storage bootstrap/cache

# Configurar Apache
RUN a2enmod rewrite
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Exponer el puerto 80
EXPOSE 80

# Comando de inicio
CMD ["apache2-foreground"]
