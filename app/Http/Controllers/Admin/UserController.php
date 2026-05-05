<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserAccessService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function __construct(
        private UserAccessService $accessService
    ) {}

    public function index(): View
    {
        $users = User::with('role')
            ->latest()
            ->paginate(15);

        return view('admin.users.index', compact('users'));
    }

    public function show(User $user): View
    {
        return view('admin.users.show', compact('user'));
    }

    public function activate(User $user): RedirectResponse
    {
        $this->accessService->activate($user);

        return back()->with('success', 'User activated successfully.');
    }

    public function revoke(User $user): RedirectResponse
    {
        $this->accessService->revoke($user);

        return back()->with('success', 'User access revoked successfully.');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('success', 'User deleted successfully.');
    }
}
