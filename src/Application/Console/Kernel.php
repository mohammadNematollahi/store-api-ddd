<?php

namespace Application\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        \Application\Console\Commands\DDDController::class,
        \Application\Console\Commands\DDDDomainService::class,
        \Application\Console\Commands\DDDElequent::class,
        \Application\Console\Commands\DDDMiddleware::class,
        \Application\Console\Commands\DDDModel::class,
        \Application\Console\Commands\DDDProvider::class,
        \Application\Console\Commands\DDDRepository::class,
        \Application\Console\Commands\DDDRequest::class,
        \Application\Console\Commands\DDDResource::class,
    ];
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
