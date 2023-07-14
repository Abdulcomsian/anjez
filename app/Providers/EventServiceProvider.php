<?php

namespace App\Providers;

use App\Repo\Auth\AuthInterface;
use App\Repo\Auth\AuthService;
use App\Repo\Quiz\QuizInterface;
use App\Repo\Quiz\QuizService;
use App\Repo\Section\SectionInterface;
use App\Repo\Section\SectionService;
use App\Repo\User\UserInterface;
use App\Repo\User\UserService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        $this->app->bind(AuthInterface::class, AuthService::class);
        $this->app->bind(SectionInterface::class, SectionService::class);
        $this->app->bind(QuizInterface::class, QuizService::class);
        $this->app->bind(UserInterface::class, UserService::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
