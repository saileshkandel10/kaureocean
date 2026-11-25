<?php

foreach ([
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
] as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

$defaults = [
    'APP_ENV' => 'production',
    'APP_DEBUG' => 'false',
    'APP_URL' => 'https://kaureocean.vercel.app',
    'ASSET_URL' => 'https://kaureocean.vercel.app',
    'APP_KEY' => 'base64:' . base64_encode(hash('sha256', 'kaureocean-vercel-app', true)),
    'APP_CONFIG_CACHE' => '/tmp/config.php',
    'APP_EVENTS_CACHE' => '/tmp/events.php',
    'APP_PACKAGES_CACHE' => '/tmp/packages.php',
    'APP_ROUTES_CACHE' => '/tmp/routes.php',
    'APP_SERVICES_CACHE' => '/tmp/services.php',
    'VIEW_COMPILED_PATH' => '/tmp/storage/framework/views',
    'DB_CONNECTION' => 'sqlite',
    'DB_DATABASE' => '/tmp/database.sqlite',
    'CACHE_DRIVER' => 'array',
    'CACHE_STORE' => 'array',
    'SESSION_DRIVER' => 'cookie',
    'QUEUE_CONNECTION' => 'sync',
    'LOG_CHANNEL' => 'stderr',
];

foreach ($defaults as $key => $value) {
    if (!getenv($key)) {
        putenv("{$key}={$value}");
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value;
    }
}

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

if (getenv('DB_CONNECTION') === 'sqlite' && getenv('DB_DATABASE') === '/tmp/database.sqlite' && !file_exists('/tmp/.migrated')) {
    $lock = fopen('/tmp/migrate.lock', 'c');
    if ($lock && flock($lock, LOCK_EX)) {
        if (!file_exists('/tmp/.migrated')) {
            if (!file_exists('/tmp/database.sqlite')) {
                touch('/tmp/database.sqlite');
            }
            try {
                $consoleApp = require __DIR__ . '/../bootstrap/app.php';
                $consoleApp->useStoragePath('/tmp/storage');
                $console = $consoleApp->make(Illuminate\Contracts\Console\Kernel::class);
                $console->bootstrap();
                $exitCode = $console->call('migrate', ['--force' => true]);
                if ($exitCode !== 0) {
                    error_log('KAUREOCEAN_MIGRATE_OUT: ' . $console->output());
                } else {
                    try {
                        $console->call('db:seed', ['--force' => true]);
                    } catch (\Throwable $se) {
                        error_log('KAUREOCEAN_SEED: ' . $se->getMessage());
                    }
                    touch('/tmp/.migrated');
                }
            } catch (\Throwable $e) {
                error_log('KAUREOCEAN_MIGRATE: ' . get_class($e) . ': ' . $e->getMessage());
            }
        }
        flock($lock, LOCK_UN);
        fclose($lock);
    }
}

$app = require __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath('/tmp/storage');

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle($request = Illuminate\Http\Request::capture());
if ($response->getStatusCode() >= 500 && isset($response->exception)) {
    error_log('KAUREOCEAN_500: ' . get_class($response->exception) . ': ' . $response->exception->getMessage() . ' in ' . $response->exception->getFile() . ':' . $response->exception->getLine());
}
$response->send();
$kernel->terminate($request, $response);
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
] as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

$defaults = [
    'APP_ENV' => 'production',
    'APP_DEBUG' => 'false',
    'APP_URL' => 'https://kaureocean.vercel.app',
    'ASSET_URL' => 'https://kaureocean.vercel.app',
    'APP_KEY' => 'base64:' . base64_encode(hash('sha256', 'kaureocean-vercel-app', true)),
    'APP_CONFIG_CACHE' => '/tmp/config.php',
    'APP_EVENTS_CACHE' => '/tmp/events.php',
    'APP_PACKAGES_CACHE' => '/tmp/packages.php',
    'APP_ROUTES_CACHE' => '/tmp/routes.php',
    'APP_SERVICES_CACHE' => '/tmp/services.php',
    'VIEW_COMPILED_PATH' => '/tmp/storage/framework/views',
    'DB_CONNECTION' => 'sqlite',
    'DB_DATABASE' => '/tmp/database.sqlite',
    'CACHE_DRIVER' => 'array',
    'CACHE_STORE' => 'array',
    'SESSION_DRIVER' => 'cookie',
    'QUEUE_CONNECTION' => 'sync',
    'LOG_CHANNEL' => 'stderr',
];

foreach ($defaults as $key => $value) {
    if (!getenv($key)) {
        putenv("{$key}={$value}");
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value;
    }
}

$needsMigration = false;
if (getenv('DB_CONNECTION') === 'sqlite' && getenv('DB_DATABASE') === '/tmp/database.sqlite' && !file_exists('/tmp/database.sqlite')) {
    touch('/tmp/database.sqlite');
    $needsMigration = true;
}

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath('/tmp/storage');

if ($needsMigration) {
    try {
        $console = $app->make(Illuminate\Contracts\Console\Kernel::class);
        $console->call('migrate', ['--force' => true]);
        $console->call('db:seed', ['--force' => true]);
    } catch (\Throwable $e) {
        error_log('KAUREOCEAN_MIGRATE: ' . $e->getMessage());
    }
}

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle($request = Illuminate\Http\Request::capture());
if ($response->getStatusCode() >= 500 && isset($response->exception)) {
    error_log('KAUREOCEAN_500: ' . get_class($response->exception) . ': ' . $response->exception->getMessage() . ' in ' . $response->exception->getFile() . ':' . $response->exception->getLine());
}
$response->send();
$kernel->terminate($request, $response);
