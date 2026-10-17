#!/usr/bin/env bash
# exit on error
set -o errexit

composer install --no-dev --optimize-autoloader

# ዳታቤዝ ለማዘጋጀት (Optional)
# php artisan migrate --force
