<?php

namespace App\Providers;

use App\Contracts\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Services\PostService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

        // Register Intervention Image Manager
        $this->app->singleton(ImageManager::class, function () {
            return new ImageManager(new Driver);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Inject latest posts only where used to avoid needless external requests.
        View::composer('frontend.layouts.common.sections.blogs', function ($view) {
            $view->with([
                'latest_posts' => app(PostService::class)->getLatestPosts(3),
            ]);
        });

        // Register image optimization Blade directives
        \Illuminate\Support\Facades\Blade::directive('optimizedImage', function ($expression) {
            return "<?php echo App\\Helpers\\ImageHelper::getOptimizedUrl({$expression}); ?>";
        });

        \Illuminate\Support\Facades\Blade::directive('optimizedSrcset', function ($expression) {
            return "<?php echo App\\Helpers\\ImageHelper::getSrcset({$expression}); ?>";
        });
    }
}
