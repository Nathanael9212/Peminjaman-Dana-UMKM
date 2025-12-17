<?php

// Create bootstrap/cache directory if not exists
$cacheDir = __DIR__ . '/../bootstrap/cache';
if (!is_dir($cacheDir)) {
    @mkdir($cacheDir, 0755, true);
}

// Remove all cached files to prevent binding errors
$files = glob($cacheDir . '/*.php');
if ($files) {
    foreach ($files as $file) {
        @unlink($file);
    }
}

// Forward to Laravel
require __DIR__ . '/../public/index.php';
