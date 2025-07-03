FROM dunglas/frankenphp:1.1.0

# Set working directory
WORKDIR /app

# Copy Laravel app
COPY ./src /app

# Copy Caddyfile
COPY ./Caddyfile /etc/frankenphp/Caddyfile

COPY ./entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Set permissions
RUN chown -R www-data:www-data /app && chmod -R 755 /app

RUN set -xe \
   && apt-get update && apt-get install -y \
       git \
       unzip \
       curl \
       libpng-dev \
       libzip-dev \
       libonig-dev \
       libxml2-dev \
       zlib1g-dev \
       libcurl4-openssl-dev \
       libpq-dev \
       libsqlite3-dev \
       default-mysql-client \
   && docker-php-ext-install \
       pdo \
       pdo_mysql \
       mbstring \
       zip \
       bcmath \
       opcache \
   && apt-get clean \
   && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --no-dev --optimize-autoloader

# Expose the port (FrankenPHP uses 80 by default)
EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]




