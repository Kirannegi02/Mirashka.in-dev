<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

echo "=== CHECK USERS IN DATABASE ===\n\n";

$users = User::whereIn('email', ['admin@demo.com', 'user@demo.com'])->get();

foreach ($users as $user) {
    echo "Email: {$user->email}\n";
    echo 'Password hash: '.substr($user->password, 0, 30)."...\n";

    $check1 = Hash::check('123456', $user->password);
    echo "Check '123456': ".($check1 ? 'MATCH ✓' : 'NO MATCH ✗')."\n";

    $check2 = Hash::check('password', $user->password);
    echo "Check 'password': ".($check2 ? 'MATCH ✓' : 'NO MATCH ✗')."\n";
    echo "\n";
}
