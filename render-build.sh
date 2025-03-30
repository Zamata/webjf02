#!/bin/bash

echo "📂 Creando directorios de caché..."
mkdir -p storage/framework/{sessions,views,cache}

echo "🔑 Asignando permisos..."
chmod -R 775 storage bootstrap/cache

echo "🚀 Limpiando y regenerando caché..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan config:cache

echo "✅ Script completado correctamente."
