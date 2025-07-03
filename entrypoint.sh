#!/bin/bash

cd /app

# If no .env exists, copy from example
if [ ! -f ".env" ]; then
    cp .env.example .env
fi

# Install dependencies if vendor not present
if [ ! -d "vendor" ]; then
    composer install --no-interaction --prefer-dist --ignore-platform-reqs
fi

# Generate app key if not set
if ! grep -q "APP_KEY=base64" .env; then
    php artisan key:generate
fi

# Clear Laravel caches
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Start FrankenPHP
exec frankenphp run --config /etc/frankenphp/Caddyfile --adapter caddyfile
