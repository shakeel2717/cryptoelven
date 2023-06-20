<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('backup:run')
        //     ->withoutOverlapping()
        //     ->everyThirtyMinutes()
        //     ->before(function () {
        //         Log::info('backup:run command Starting in Scheduler');
        //     })
        //     ->after(function () {
        //         Log::info('backup:run command Finished in Scheduler');
        //     })
        //     ->runsInMaintenanceMode();



        // $schedule->command('check:txn')
        //     ->withoutOverlapping()
        //     ->everyMinute()
        //     ->before(function () {
        //         Log::info('check:txn command Starting in Scheduler');
        //     })
        //     ->after(function () {
        //         Log::info('check:txn command Finished in Scheduler');
        //     })
        //     ->runsInMaintenanceMode();


        $schedule->command('blockchain:run')
            ->withoutOverlapping()
            ->twiceDaily()
            ->runsInMaintenanceMode();


        $schedule->command('global:share')
            ->withoutOverlapping()
            ->twiceMonthly()
            ->runsInMaintenanceMode();


        $schedule->command('queue:work --stop-when-empty')
            ->withoutOverlapping()
            ->everyMinute()
            ->runsInMaintenanceMode();


        $schedule->command('queue:retry --queue=default')
            ->withoutOverlapping()
            ->everyMinute()
            ->runsInMaintenanceMode();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
