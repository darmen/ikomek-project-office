# iKomek Project Office for Laravel 5

[![Latest Stable Version](https://poser.pugx.org/darmen/ikomek-project-office/v/stable.png)](https://packagist.org/packages/nesbot/carbon)
[![Total Downloads](https://poser.pugx.org/darmen/ikomek-project-office/downloads.png)](https://packagist.org/packages/nesbot/carbon)

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
