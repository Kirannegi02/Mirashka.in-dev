<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserAccessService
{
    public function activate(User $user): bool
    {
        $user->update([
            'is_active' => true,
            'status' => 'approved',
            'approved_at' => now(),
        ]);

        Log::info('User activated', ['user_id' => $user->id, 'email' => $user->email]);

        return true;
    }

    public function revoke(User $user): bool
    {
        $user->update([
            'is_active' => false,
            'status' => 'suspended',
        ]);

        Log::info('User access revoked', ['user_id' => $user->id, 'email' => $user->email]);

        return true;
    }

    public function canAccess(User $user): bool
    {
        return $user->is_active && $user->status === 'approved';
    }

    public function canViewDashboard(User $user): bool
    {
        return $user->role_id == 1;
    }

    public function canManageUsers(User $user): bool
    {
        return $user->role_id == 1;
    }

    public function canManageContent(User $user): bool
    {
        return $user->role_id == 1 || $user->is_active;
    }
}
