<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info('Seeding users...');

        $this->seedAdminUser();
        $this->seedApprovedUser();
        $this->seedPendingUser();
        $this->seedRejectedUser();
        $this->seedBulkUsers();

        $this->command->info('User seeding completed!');
    }

    private function seedAdminUser(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@demo.com'],
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'role_id' => 1,
                'status' => 'approved',
                'is_active' => true,
                'phone' => '+91 98765 43210',
                'company_name' => 'Mirashka',
                'industry' => 'Media',
                'approved_at' => now(),
            ]
        );
        $this->command->info('Admin user created: admin@demo.com / 123456');
    }

    private function seedApprovedUser(): void
    {
        User::updateOrCreate(
            ['email' => 'user@demo.com'],
            [
                'name' => 'John Doe',
                'username' => 'johndoe',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'status' => 'approved',
                'is_active' => true,
                'phone' => '+91 98765 43211',
                'company_name' => 'Tech Solutions Pvt Ltd',
                'industry' => 'Technology',
                'approved_at' => now(),
            ]
        );
        $this->command->info('Approved user created: user@demo.com / 123456');
    }

    private function seedPendingUser(): void
    {
        User::updateOrCreate(
            ['email' => 'pending@demo.com'],
            [
                'name' => 'Pending User',
                'username' => 'pendinguser',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'status' => 'pending',
                'is_active' => true,
                'phone' => '+91 98765 43212',
                'company_name' => 'Pending Corp',
                'industry' => 'Finance',
                'approved_at' => null,
            ]
        );
        $this->command->info('Pending user created: pending@demo.com / 123456');
    }

    private function seedRejectedUser(): void
    {
        User::updateOrCreate(
            ['email' => 'suspended@demo.com'],
            [
                'name' => 'Suspended User',
                'username' => 'suspendeduser',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'status' => 'suspended',
                'is_active' => false,
                'phone' => '+91 98765 43213',
                'company_name' => 'Suspended Ltd',
                'industry' => 'Healthcare',
                'approved_at' => null,
            ]
        );
        $this->command->info('Suspended user created: suspended@demo.com / 123456');
    }

    private function seedBulkUsers(): void
    {
        $existingCount = User::count();
        $usersToCreate = 25 - $existingCount;

        if ($usersToCreate > 0) {
            User::factory()->count($usersToCreate)->create();
            $this->command->info("Created {$usersToCreate} bulk users for pagination testing");
        } else {
            $this->command->info('Sufficient users already exist, skipping bulk creation');
        }
    }
}
