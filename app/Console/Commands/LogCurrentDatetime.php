<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class LogCurrentDatetime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:time';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Log date time in the logs';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        info(Carbon::now()->format('Y') . "From main Command");
        $this->info("Logged successfully");
    }
}
