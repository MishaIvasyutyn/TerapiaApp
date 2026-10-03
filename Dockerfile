# ---------- Stage 1: build frontend assets (Laravel Mix) ----------
FROM node:14 AS frontend
WORKDIR /app
COPY package.json package-lock.json* ./
RUN npm install
COPY . .
RUN npm run prod

# ---------- Stage 2: PHP 7.4 + Apache (Laravel 7 needs PHP 7.x) ----------
FROM php:7.4-apache

# Debian Bullseye (base of php:7.4) is EOL; its packages live on the archive now.
# (Only the main archive - the archived security pocket has no Release file.)
RUN echo "deb http://archive.debian.org/debian bullseye main contrib non-free" > /etc/apt/sources.list

# System deps + PHP extensions required by Laravel
RUN apt-get update && apt-get install -y \
        git curl unzip \
        libpng-dev libjpeg-dev libfreetype6-dev \
        libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo pdo_mysql mbstring zip exif pcntl bcmath gd \
    && a2enmod rewrite \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Serve Laravel's public/ directory; allow .htaccess rewrites
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf

WORKDIR /var/www/html
COPY . .
# Bring in Mix-compiled assets from stage 1
COPY --from=frontend /app/public/ ./public/

RUN composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction \
    && (php artisan storage:link || true) \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 80
