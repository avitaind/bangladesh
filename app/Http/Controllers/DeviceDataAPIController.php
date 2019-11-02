<?php

namespace App\Http\Controllers;

use App\DeviceData;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DeviceDataAPIController extends Controller
{
    public function getDeviceData(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'device' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);

        $email = $request->get('email');
        $device = $request->get('device');

        try {
            $start_date = Carbon::createFromFormat("Y-m-d", $request->start_date);
        } catch (\Exception $ex) {
            $start_date = Carbon::today();
        }

        try {
            $end_date = Carbon::createFromFormat("Y-m-d", $request->end_date);
        } catch (\Exception $ex) {
            $end_date = Carbon::today();
        }



        if ( $device == 'all') {
            $device_types = ['scale', 'sleepband'];
        } else {
            $device_types = [$device];
        }

        $query = DeviceData::whereIn('device_code', $device_types)
            ->whereBetween('record_time', [$start_date, $end_date])
            ->whereHas('user', function ($q) use ($email) {
                return $q->select('id')->from('users')->whereEmail($email);
            });

        $data = $query->get();


        return $data->map(function (DeviceData $deviceData) {
            return [
                'id' => $deviceData->id,
                'type' => $deviceData->device_code,
                'record_time' => $deviceData->record_time->format("Y-m-d H:i:s"),
                'data' => $deviceData->data,
            ];
        });
    }

    public function addDeviceData(Request $request) {

        $this->validate($request, [
            'device' => 'required',
            'data' => ['required'],
            'email' => 'required|email',
            'record_time' => 'required|date',
        ]);

        $user = User::whereEmail($request->email)->first();

        $deviceData = new DeviceData();
        $deviceData->record_time = $request->record_time;
        $deviceData->user_id = $user->id;
        $deviceData->data = $request->data;
        $deviceData->device_code = $request->device;
        $deviceData->save();

        return [
            'id' => $deviceData->id,
            'type' => $deviceData->device_code,
            'record_time' => $deviceData->record_time->format("Y-m-d H:i:s"),
            'data' => $deviceData->data,
        ];

    }

    public function updateDeviceData(Request $request) {

        $this->validate($request, [
            'data'   => ['required'],
            'id'     => 'required|integer'
        ]);

        $deviceData = DeviceData::whereId($request->get('id'))->first();

        if ($deviceData) {
            $deviceData->data = $request->get('data');
        }

        return [
            'id' => $deviceData->id,
            'type' => $deviceData->device_code,
            'record_time' => $deviceData->record_time->format("Y-m-d H:i:s"),
            'data' => $deviceData->data,
        ];

    }

    public function deleteDeviceData(Request $request) {

        $this->validate($request, [
            'id' => 'required|integer'
        ]);

        $deviceData = DeviceData::find($request->id);

        if ($deviceData) {
            $deviceData->delete();
        }

        return [
            'status' => 'done'
        ];

    }
}
