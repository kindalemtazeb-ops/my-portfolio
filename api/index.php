<?php

// Prepare storage directories for Vercel read-only filesystem
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sheets',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache',
    '/tmp/storage/logs',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir) && !mkdir($dir, 0755, true) && !is_dir($dir)) {
        throw new RuntimeException("Unable to create Vercel storage directory: {$dir}");
    }
}

// Laravel's deployed code is read-only, so all runtime writes must use /tmp.
$_ENV['LARAVEL_STORAGE_PATH'] = '/tmp/storage';
$_SERVER['LARAVEL_STORAGE_PATH'] = '/tmp/storage';
putenv('LARAVEL_STORAGE_PATH=/tmp/storage');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('SESSION_DRIVER=file');
putenv('CACHE_STORE=file');
$_ENV['LOG_CHANNEL'] = 'stderr';
$_SERVER['LOG_CHANNEL'] = 'stderr';
putenv('LOG_CHANNEL=stderr');
$_ENV['LOG_LEVEL'] = 'error';
$_SERVER['LOG_LEVEL'] = 'error';
putenv('LOG_LEVEL=error');

// Forward requests to Laravel's public/index.php
require __DIR__ . '/../public/index.php';