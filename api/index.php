<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| VERCEL FIX: Storage Path
|--------------------------------------------------------------------------
|
| Vercel bersifat Read-Only. Kita harus memindahkan path storage
| ke folder /tmp yang bersifat writable (boleh ditulis).
|
*/
$storagePath = '/tmp/storage';

if (!is_dir($storagePath)) {
    mkdir($storagePath, 0777, true);
    mkdir($storagePath . '/framework/views', 0777, true);
    mkdir($storagePath . '/framework/cache', 0777, true);
    mkdir($storagePath . '/logs', 0777, true);
}

// Set Laravel untuk menggunakan path /tmp ini
$app->useStoragePath($storagePath);

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);