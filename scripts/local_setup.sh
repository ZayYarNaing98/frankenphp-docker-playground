#!/bin/bash

set -e

echo "===> Starting up Docker containers"
docker compose -f docker-compose.local.yml up -d --build

echo "===> Docker containers started"

# Wait for database to be ready
echo "===> Waiting for database to be ready..."
sleep 10

# Install PHP dependencies and run migrations
echo "===> Installing PHP dependencies and running migrations"
docker compose -f docker-compose.local.yml exec -T app composer install --no-interaction
docker compose -f docker-compose.local.yml exec -T app php artisan migrate:fresh --seed

echo "===> Database setup completed"

docker compose -f docker-compose.local.yml exec -T app php artisan optimize:clear

# Reload Docker containers
echo "===> Reloading Docker containers"
docker compose -f docker-compose.local.yml down
docker compose -f docker-compose.local.yml up -d

echo "===> Reloaded docker"

echo "===> Local setup successfully finished!"