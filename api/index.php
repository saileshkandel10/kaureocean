<?php

if (!getenv('APP_KEY')) {
    $fallbackKey = 'base64:' . base64_encode(hash('sha256', 'kaureocean-vercel-app', true));
    putenv("APP_KEY={$fallbackKey}");
    $_ENV['APP_KEY'] = $fallbackKey;
    $_SERVER['APP_KEY'] = $fallbackKey;
}

require __DIR__ . '/../public/index.php';
