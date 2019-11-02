<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Jobs\DownloadDeviceData;

class SyncDeviceData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync-device-data {type=all} {--email=} {--date=} {--end_date=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync IOT Device Data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(  )
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

        $type = $this->argument('type');

        $date_string = $this->option('date');

        if ( $date_string ) {
            $start_date = Carbon::createFromFormat("Y-m-d", $date_string);
        } else {
            $start_date = Carbon::yesterday();
        }

        $end_date_string=  $this->option('end_date');

        if ( $end_date_string ) {
            $end_date = Carbon::createFromFormat('Y-m-d', $end_date_string);
        } else {
            $end_date = Carbon::yesterday()->endOfDay();
        }

        $email = $this->option('email');

        if ( $email ) {
            $users = \App\User::where('email', $email)->get();
        } else {
            $users = \App\User::all();
        }

        if ( $type == 'all') {
            $health_devices = ['scale', 'sleepband'];
        } else {
            $health_devices = [ $type ];
        }

        $this->info("Start Syncing ".count($users)." users device data");

        foreach ( $users as $user )
        {
            foreach ( $health_devices as $health_device ) {
                DownloadDeviceData::dispatch($user, $health_device, $start_date, $end_date);
                $this->info( "Fetch ".ucwords($health_device)." record for {$user->email} at {$start_date->format("Y-m-d")} to {$end_date->format("Y-m-d")}");
            }
        }
    }
}
