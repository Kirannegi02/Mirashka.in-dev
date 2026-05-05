<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\webinar;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Show login page
    public function login(): Factory|View
    {
        return view('admin.login');
    }

    // Handle login POST
    public function loginPost(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials, please try again.',
        ]);
    }

    public function dashboard(): Factory|View
    {
        $webinarsCount = Webinar::count();
        $webinarRegistrationsCount = \App\Models\WebinarRegistration::count();
        $casestudiesCount = \App\Models\CaseStudy::count();
        $podcastsCount = \App\Models\Podcast::count();
        $bannersCount = \App\Models\Banner::count();
        $enquiryCount = \App\Models\ContactForm::count();
        $teamCount = Team::count();

        return view('admin.dashboard', compact('webinarsCount', 'webinarRegistrationsCount', 'casestudiesCount', 'podcastsCount', 'bannersCount', 'enquiryCount', 'teamCount'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Logged out successfully');
    }
}
