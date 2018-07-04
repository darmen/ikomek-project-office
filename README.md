## iKomek Project Office for Laravel 5

## Installation

    composer require darmen/ikomek-project-office
    
## Update Scheduler

In `app/Console/Kernel.php`

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('ikomek:project-office:fetch')->hourly();
    }
    
## Open in browser

`https://your-app.dev/project-office/`
