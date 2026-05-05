<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(): View
    {
        $user = auth()->user();

        if ($user->role_id != 2) {
            abort(403, 'Access denied. User portal is for registered users only.');
        }

        return view('user.dashboard', compact('user'));
    }
}
