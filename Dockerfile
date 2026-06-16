FROM php:8.1-apache

# Instalar dependencias del sistema y extensiones de PHP para PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Habilitar mod_rewrite de Apache si fuera necesario en el futuro
RUN a2enmod rewrite

# Establecer el directorio de trabajo
WORKDIR /var/www/html
