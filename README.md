# iKomek Project Office for Laravel 5

[![Latest Stable Version](https://poser.pugx.org/darmen/ikomek-project-office/version)](https://packagist.org/packages/darmen/ikomek-project-office)
[![License](https://poser.pugx.org/darmen/ikomek-project-office/license)](https://packagist.org/packages/darmen/ikomek-project-office)

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
