<?php

namespace Modules\Sample;


use Illuminate\Console\Scheduling\Schedule;

class Scheduler
{

    /**
     * Scheduler constructor.
     */
    public function __construct()
    {
    }

    public function schedule(Schedule $schedule)
    {
        $schedule->command('log:time1')->everyMinute();
    }

}