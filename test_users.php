<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;

echo "=== ALL USERS ===\n";

$users = User::all();

echo 'Total users: '.$users->count()."\n\n";

foreach ($users->take(10) as $user) {
    echo "ID: {$user->id}, Email: {$user->email}, Deleted: ".($user->deleted_at ? 'YES' : 'NO')."\n";
}
