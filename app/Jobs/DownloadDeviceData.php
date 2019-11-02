<?php

namespace App\Jobs;

use App\DeviceData;
use App\DeviceDataManager;
use App\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class DownloadDeviceData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $user;

    protected $device_type;

    protected $start_date;

    protected $end_date;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, $device, Carbon $start_date, Carbon $end_date = null)
    {
        //
        $this->user = $user;
        $this->device_type = $device;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(DeviceDataManager $dataManager)
    {
        // Grab Data
        $datas = null;

        if ( $this->device_type == 'scale') {
            $datas = $dataManager->fetchScaleData($this->user->email, $this->start_date, $this->end_date);
        } else if ( $this->device_type == 'sleepband') {
            $datas = $dataManager->fetchSleepbandData($this->user->email, $this->start_date, $this->end_date);
        }
        
        // Convert Data.
        if ( $datas ) {
            foreach ( $datas as $raw_data ) {

                $record_time = $raw_data['record_time'];
                unset($raw_data['record_time']);

                $exists = DeviceData::where([
                    'record_time' => $record_time,
                    'device_code' => $this->device_type,
                    'user_id' => $this->user->id])->exists();

                if ( !$exists ) {
                    $device_data = new DeviceData();
                    $device_data->record_time = $record_time;
                    $device_data->user_id = $this->user->id;
                    $device_data->device_code = $this->device_type;
                    $device_data->data = $raw_data;
                    $device_data->save( );
                }
            }
        }

    }

}
