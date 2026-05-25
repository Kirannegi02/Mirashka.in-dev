<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CaseStudyController;
use App\Http\Controllers\Admin\JobApplicationController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\PodcastController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\WebinarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TestEmailController;
use App\Http\Controllers\WebinarRegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Website page Routes

Route::get('/', [FrontendController::class, 'home']);
Route::get('/thank-you', [FrontendController::class, 'thankyou'])->name('thank-you');
Route::get('/our-Journey', [FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/ai-deep-tech', [FrontendController::class, 'aideeptech'])->name('aideeptech');
Route::get('/awards', [FrontendController::class, 'awards'])->name('awards');
Route::get('/awards-consulting', [FrontendController::class, 'awardsconsulting'])->name('awardsconsulting');
Route::get('/bfsi-fintech', [FrontendController::class, 'bfsifintech'])->name('bfsifintech');
Route::get('/capital-markets-communication', [FrontendController::class, 'capitalmarketscommunication'])->name('capitalmarketscommunication');
Route::get('/client', [FrontendController::class, 'client'])->name('client');
Route::get('/voice-of-leadership-podcast-audioip', [FrontendController::class, 'voiceofleadershippodcastaudioip'])->name('voiceofleadershippodcastaudioip');
Route::get('/who-we-serve', [FrontendController::class, 'whoweserve'])->name('whoweserve');
Route::get('/strategic-media-placements', [FrontendController::class, 'strategicmediaplacements'])->name('strategicmediaplacements');
Route::get('/speaking-engagements-events', [FrontendController::class, 'speakingengagementsevents'])->name('speakingengagementsevents');
Route::get('/reputation-risk-crisis-preparedness', [FrontendController::class, 'reputationriskcrisispreparedness'])->name('reputationriskcrisispreparedness');
Route::get('/reputation-capital-awards-positioning', [FrontendController::class, 'reputationcapitalawardspositioning'])->name('reputationcapitalawardspositioning');
Route::get('/reports-whitepapers', [FrontendController::class, 'reportswhitepapers'])->name('reportswhitepapers');
Route::get('/regional-impact-communication', [FrontendController::class, 'regionalimpactcommunication'])->name('regionalimpactcommunication');
Route::get('/sports', [FrontendController::class, 'sports'])->name('sports');
Route::get('/project-enquiries', [FrontendController::class, 'projectenquiries'])->name('projectenquiries');
Route::get('/policy-advocacy', [FrontendController::class, 'policyadvocacy'])->name('policyadvocacy');
Route::get('/podcasting-services', [FrontendController::class, 'podcastingservices'])->name('podcastingservices');
Route::get('/what-we-do', [FrontendController::class, 'whatwedo'])->name('whatwedo');
Route::redirect('/hraas/compliance-workplace-integrity', '/compliance-workplace-integrity', 301);
Route::redirect('/hraas', '/hr-as-a-service', 301);

foreach (config('what-we-do-categories', []) as $categorySlug => $category) {
    $subSlugs = implode('|', array_keys(config($category['sub_services_config'].'.services', [])));
    $routeName = $category['route_name'];

    Route::get('/'.$categorySlug, [FrontendController::class, 'whatWeDoCategory'])
        ->defaults('categorySlug', $categorySlug)
        ->name($routeName);

    if ($subSlugs !== '') {
        Route::get('/'.$categorySlug.'/{slug}', [FrontendController::class, 'whatWeDoSubService'])
            ->defaults('categorySlug', $categorySlug)
            ->where('slug', $subSlugs)
            ->name($routeName.'.sub');
    }
}
Route::get('/why-mirashka', [FrontendController::class, 'whymirashka'])->name('whymirashka');
Route::get('/partnerships-contact', [FrontendController::class, 'partnershipscontact'])->name('partnershipscontact');
Route::get('/office-locations', [FrontendController::class, 'officelocations'])->name('officelocations');
Route::get('/methodology', [FrontendController::class, 'methodology'])->name('methodology');
Route::get('/media-press-contact', [FrontendController::class, 'mediapresscontact'])->name('mediapresscontact');
Route::get('/luxury-brands', [FrontendController::class, 'luxurybrands'])->name('luxurybrands');
Route::get('/localised-media-strategy', [FrontendController::class, 'localisedmediastrategy'])->name('localisedmediastrategy');

Route::get('/infrastructure-energy', [FrontendController::class, 'infrastructureenergy'])->name('infrastructureenergy');
Route::get('/influence-coaching', [FrontendController::class, 'influencecoaching'])->name('influencecoaching');

Route::get('/investor-visibility', [FrontendController::class, 'investorvisibility'])->name('investorvisibility');

Route::get('/linkedin-authority-building', [FrontendController::class, 'linkedinauthoritybuilding'])->name('linkedinauthoritybuilding');
Route::get('/leadership-media-training', [FrontendController::class, 'leadershipmediatraining'])->name('leadershipmediatraining');
Route::get('/health-wellness', [FrontendController::class, 'healthwellness'])->name('healthwellness');

Route::get('/leadership', [FrontendController::class, 'leadership'])->name('leadership');

Route::get('/executive-in-fluence-media-authority', [FrontendController::class, 'executiveinfluencemediaauthority'])->name('executiveinfluencemediaauthority');

Route::get('/enterprise-tech-saas', [FrontendController::class, 'enterprisetechsaas'])->name('enterprisetechsaas');
Route::get('/education-and-edtech', [FrontendController::class, 'educationedtech'])->name('educationedtech');
Route::get('/digital-presence-thought-leadership', [FrontendController::class, 'digitalpresencethoughtleadership'])->name('digitalpresencethoughtleadership');
Route::get('/cxo-presence-industry-visibility', [FrontendController::class, 'cxopresenceindustryvisibility'])->name('cxopresenceindustryvisibility');

Route::get('/privacy-policy', [FrontendController::class, 'privacypolicy']);
Route::get('/return-and-refund', [FrontendController::class, 'returnandrefund']);
Route::get('/terms-and-conditions', [FrontendController::class, 'termsandconditions']);
Route::post('/contact-submit', [ContactFormController::class, 'submitContact'])->name('contact.submit')->middleware('throttle:contact-form');
Route::get('/case-studies', [FrontendController::class, 'casestudy']);
Route::get('/filter-case-studies', [CaseStudyController::class, 'filter']);
Route::get('/case-study/{slug}', [FrontendController::class, 'casestudysingle']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/page/{page}', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'single']);
Route::get('/podcasts', [FrontendController::class, 'podcast']);
Route::get('/events-webinars', [FrontendController::class, 'webinars']);
Route::get('/webinars/filter/{status}', [FrontendController::class, 'filterWebinars']);
Route::get('/events-webinars/{id}', [FrontendController::class, 'webinarssingle'])->name('webinar.single');
Route::post('/webinars/register', [WebinarRegistrationController::class, 'store'])->name('webinar.register');
Route::get('/leadership-team', [FrontendController::class, 'team'])->name('leadershipteam');
Route::get('/leadership-team/{slug}', [FrontendController::class, 'teamsingle'])->name('teamsingle');

Route::get('/company-packages', [FrontendController::class, 'cpackages']);
Route::get('/indian-company-packages', [FrontendController::class, 'icpackages']);
Route::get('/cxo-visibility-starter', [FrontendController::class, 'cxovisibilitystarter']);
Route::get('/media-coverage', [FrontendController::class, 'mediacoverage']);

// Career Portal Routes
Route::get('/careers', [CareerController::class, 'index'])->name('careers');
Route::get('/careers/{slug}', [CareerController::class, 'show'])->name('careers.show');
Route::post('/careers/apply', [CareerController::class, 'apply'])->name('careers.apply');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login')->middleware('guest');

    // POST route for login
    Route::post('/login', [AdminController::class, 'loginPost'])->name('admin.login.post');

    // Admin Dashboard (protected)
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');

    // Admin Logout
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout')->middleware('auth');
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index')->middleware('auth');
    Route::get('/users/{user}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('users.show')->middleware('auth');
    Route::post('/users/{user}/activate', [\App\Http\Controllers\Admin\UserController::class, 'activate'])->name('users.activate')->middleware('auth');
    Route::post('/users/{user}/revoke', [\App\Http\Controllers\Admin\UserController::class, 'revoke'])->name('users.revoke')->middleware('auth');
    Route::delete('/users/{user}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');

    Route::get('/webinars', [WebinarController::class, 'index'])->name('webinars.index')->middleware('auth');
    Route::post('/webinars', [WebinarController::class, 'store'])->name('webinars.store')->middleware('auth');
    Route::get('/webinars/{id}/edit', [WebinarController::class, 'edit'])->name('webinars.edit')->middleware('auth');
    Route::put('/webinars/{id}', [WebinarController::class, 'update'])->name('webinars.update')->middleware('auth');
    Route::delete('/webinars/{id}', [WebinarController::class, 'destroy'])->name('webinars.destroy')->middleware('auth');
    Route::get('/webinars/{id}/registrations', [WebinarController::class, 'registrations'])->name('webinars.registrations')->middleware('auth');
    Route::get('/podcasts', [PodcastController::class, 'index'])->name('podcasts.index')->middleware('auth');
    Route::post('/podcasts', [PodcastController::class, 'store'])->name('podcasts.store')->middleware('auth');
    Route::delete('/podcasts/{id}', [PodcastController::class, 'destroy'])->name('podcasts.destroy')->middleware('auth');
    Route::get('/podcasts/{id}/edit', [PodcastController::class, 'edit'])->name('podcasts.edit')->middleware('auth');
    Route::put('/podcasts/{id}', [PodcastController::class, 'update'])->name('podcasts.update')->middleware('auth');

    Route::get('/banners', [BannerController::class, 'index'])->name('banners.index')->middleware('auth');
    Route::post('/banners', [BannerController::class, 'store'])->name('banners.store')->middleware('auth');
    Route::get('/banners/{id}/edit', [BannerController::class, 'edit'])->name('banners.edit')->middleware('auth');
    Route::put('/banners/{id}', [BannerController::class, 'update'])->name('banners.update')->middleware('auth');
    Route::delete('/banners/{id}', [BannerController::class, 'destroy'])->name('banners.destroy')->middleware('auth');

    Route::get('/case-studies', [CaseStudyController::class, 'index'])->name('casestudies.index')->middleware('auth');
    Route::post('/case-studies', [CaseStudyController::class, 'store'])->name('casestudies.store')->middleware('auth');
    Route::get('/case-studies/{id}/edit', [CaseStudyController::class, 'edit'])->name('casestudies.edit')->middleware('auth');
    Route::put('/case-studies/{id}', [CaseStudyController::class, 'update'])->name('casestudies.update')->middleware('auth');
    Route::delete('/case-studies/{id}', [CaseStudyController::class, 'destroy'])->name('casestudies.destroy')->middleware('auth');
    Route::delete('/case-studies/media/{id}', [CaseStudyController::class, 'deleteMedia'])->name('casestudies.deleteMedia')->middleware('auth');

    // TEAM ROUTES
    Route::get('/teams', [TeamController::class, 'index'])->name('teams.index')->middleware('auth');
    Route::post('/teams', [TeamController::class, 'store'])->name('teams.store')->middleware('auth');
    Route::get('/teams/{id}/edit', [TeamController::class, 'edit'])->name('teams.edit')->middleware('auth');
    Route::put('/teams/{id}', [TeamController::class, 'update'])->name('teams.update')->middleware('auth');
    Route::delete('/teams/{id}', [TeamController::class, 'destroy'])->name('teams.destroy')->middleware('auth');

    Route::get('/mainform', [ContactFormController::class, 'index'])->name('mainform.index')->middleware('auth');
    Route::post('/mainform/{contact}/retry-email', [ContactFormController::class, 'retryEmail'])->name('mainform.retry-email')->middleware('auth');

    // Job Management Routes
    Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index')->middleware('auth');
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create')->middleware('auth');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store')->middleware('auth');
    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit')->middleware('auth');
    Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update')->middleware('auth');
    Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy')->middleware('auth');
    Route::post('/jobs/{job}/toggle-status', [JobController::class, 'toggleStatus'])->name('jobs.toggle-status')->middleware('auth');

    // Job Applications Routes
    Route::get('/applications', [JobApplicationController::class, 'index'])->name('applications.index')->middleware('auth');
    Route::get('/applications/{application}', [JobApplicationController::class, 'show'])->name('applications.show')->middleware('auth');
    Route::post('/applications/{application}/status', [JobApplicationController::class, 'updateStatus'])->name('applications.update-status')->middleware('auth');
    Route::post('/applications/{application}/send-email', [JobApplicationController::class, 'sendStatusEmail'])->name('applications.send-email')->middleware('auth');
    Route::get('/applications/{application}/download', [JobApplicationController::class, 'downloadResume'])->name('applications.download')->middleware('auth');
    Route::delete('/applications/{application}', [JobApplicationController::class, 'destroy'])->name('applications.destroy')->middleware('auth');
});
// Client Portal Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/client-portal-login', [App\Http\Controllers\Auth\AuthController::class, 'showLogin'])->name('clientportallogin');
    Route::post('/client-portal-login', [App\Http\Controllers\Auth\AuthController::class, 'login'])->name('clientportallogin.post');

    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegister'])->name('register');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

    Route::get('/forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

    Route::get('/auth/{provider}/redirect', [App\Http\Controllers\Auth\SocialAuthController::class, 'redirect']);
    Route::get('/auth/{provider}/callback', [App\Http\Controllers\Auth\SocialAuthController::class, 'handleCallback']);
});
// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
});

// User Panel Routes
Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');
});

// Test Routes (Remove in production)
Route::get('/test-email', [TestEmailController::class, 'test']);
Route::get('/test-email-send/{id}', [TestEmailController::class, 'sendToCandidate']);

// Debug route - no auth required for testing
Route::get('/debug-email/{id}', function ($id) {
    $application = \App\Models\JobApplication::with('job')->find($id);

    if (! $application) {
        return 'Application not found';
    }

    try {
        \Illuminate\Support\Facades\Mail::to($application->email)->send(new \App\Mail\ApplicationStatusUpdatedMail($application));

        return 'SUCCESS: Email sent to: '.$application->email;
    } catch (\Exception $e) {
        return 'ERROR: '.$e->getMessage();
    }
});

// Debug All Email Types
Route::get('/debug-all-emails', function () {
    $results = [];

    // 1. User Registration Email
    try {
        $user = \App\Models\User::first();
        if ($user) {
            \Illuminate\Support\Facades\Mail::to($user->email)->send(new \App\Mail\UserRegistered($user));
            $results[] = '✓ User Registration: SUCCESS - '.$user->email;
        } else {
            $results[] = '⚠ User: No user found';
        }
    } catch (\Exception $e) {
        $results[] = '✗ User Registration: ERROR - '.$e->getMessage();
    }

    // 2. Job Application Status Email
    try {
        $app = \App\Models\JobApplication::with('job')->first();
        if ($app) {
            \Illuminate\Support\Facades\Mail::to($app->email)->send(new \App\Mail\ApplicationStatusUpdatedMail($app));
            $results[] = '✓ Job Application: SUCCESS - '.$app->email;
        } else {
            $results[] = '⚠ Job Application: No application found';
        }
    } catch (\Exception $e) {
        $results[] = '✗ Job Application: ERROR - '.$e->getMessage();
    }

    // 3. Contact Form Email
    try {
        $contact = \App\Models\ContactForm::first();
        if ($contact) {
            \Illuminate\Support\Facades\Mail::to($contact->email)->send(new \App\Mail\UserContactMail($contact));
            $results[] = '✓ Contact Form (User): SUCCESS - '.$contact->email;
        } else {
            $results[] = '⚠ Contact Form: No contact found';
        }
    } catch (\Exception $e) {
        $results[] = '✗ Contact Form: ERROR - '.$e->getMessage();
    }

    // 4. Webinar Registration Email
    try {
        $webinar = \App\Models\WebinarRegistration::with('webinar')->first();
        if ($webinar) {
            \Illuminate\Support\Facades\Mail::to($webinar->email)->send(new \App\Mail\WebinarConfirmationMail($webinar));
            $results[] = '✓ Webinar Registration: SUCCESS - '.$webinar->email;
        } else {
            $results[] = '⚠ Webinar: No registration found';
        }
    } catch (\Exception $e) {
        $results[] = '✗ Webinar Registration: ERROR - '.$e->getMessage();
    }

    return '<h3>Email System Test Results</h3><pre>'.implode("\n", $results).'</pre>';
});

// Debug all emails
Route::get('/debug-all-emails', function () {
    $results = [];

    // Test 1: User Registration
    try {
        $user = \App\Models\User::first();
        if ($user) {
            \Illuminate\Support\Facades\Mail::to($user->email)->send(new \App\Mail\UserRegistered($user));
            $results[] = 'User Registered: SUCCESS';
        }
    } catch (\Exception $e) {
        $results[] = 'User Registered: ERROR - '.$e->getMessage();
    }

    // Test 2: Job Application Status
    try {
        $app = \App\Models\JobApplication::with('job')->find(1);
        if ($app) {
            \Illuminate\Support\Facades\Mail::to($app->email)->send(new \App\Mail\ApplicationStatusUpdatedMail($app));
            $results[] = 'Job Application: SUCCESS';
        }
    } catch (\Exception $e) {
        $results[] = 'Job Application: ERROR - '.$e->getMessage();
    }

    return implode('<br>', $results);
});
