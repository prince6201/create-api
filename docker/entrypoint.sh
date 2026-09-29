#!/bin/bash
set -e
cd /var/www/html

php artisan config:clear
php artisan config:cache
php artisan route:cache || true
php artisan view:cache || true

if [ "$RUN_MIGRATIONS" != "false" ]; then
    php artisan migrate --force
fi

exec "$@"
