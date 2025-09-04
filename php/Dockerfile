# Use the official PHP image based on Alpine
FROM php:8.1-fpm-alpine

# Install the necessary extensions and dependencies using apk
RUN apk update && apk add --no-cache \
    git \
    curl \
    libpng \
    libzip \
    libxml2 \
    oniguruma-dev \
    zip \
    unzip \

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer