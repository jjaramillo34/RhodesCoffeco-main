#!/bin/bash

echo "🚀 Starting deployment..."

# Pull latest changes
echo "📥 Pulling latest changes..."
git pull origin main

# Install dependencies
echo "📦 Installing Composer dependencies..."
composer install --optimize-autoloader --no-dev

echo "📦 Installing NPM dependencies..."
npm install
npm run build

# Set permissions
echo "🔒 Setting permissions..."
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Clear and cache
echo "🧹 Clearing caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

echo "💾 Creating caches..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize
echo "⚡ Optimizing..."
composer dump-autoload -o

# Storage setup
echo "🔗 Setting up storage link..."
php artisan storage:link

# Set storage permissions
echo "🔒 Setting storage permissions..."
chmod -R 775 public/storage
chown -R www-data:www-data public/storage

echo "✅ Deployment completed!" 