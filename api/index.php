<?php

// Clear bootstrap cache in Vercel serverless environment
$bootstrapCache = __DIR__ . '/../bootstrap/cache';
if (is_dir($bootstrapCache)) {
    array_map('unlink', glob("$bootstrapCache/*.php"));
}

// Forward to Laravel
require __DIR__ . '/../public/index.php';
