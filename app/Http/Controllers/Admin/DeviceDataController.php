<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DeviceData;
use Excel;
use Maatwebsite\Excel\Classes\LaravelExcelWorksheet;

class DeviceDataController extends Controller
{
    //
    public function downloadForm( ) {
        return view('admin.device_data_form');
    }

    public function handleDownload(Request $request) {


        $device_type = $request->get('device_type');

        $datas = DeviceData::where('device_code', $device_type)->get();

        $filename = $device_type.'-device-data';

        // Convert data to excel.
        \Excel::create($filename, function ($excel) use ($datas, $device_type) {

            $excel->sheet('Datas', function (LaravelExcelWorksheet $sheet) use( $datas, $device_type) {

                if ( $device_type == 'scale') {

                    $sheet->appendRow([
                        'Email',
                        'Record Date',  'Body Weight', 'Water Rate', 'Muscle rate', 'Subcutaneous fat rate',
                        'Visceral fat level', 'Basic metabolism', 'Bond Weight', 'Fat Rate', 'Protein'
                    ]);

                } else if ( $device_type == 'sleepband') {

                    $sheet->appendRow([
                        'Email',
                        'Record Date',  'Start Time', 'End Time', 'Wake duration', 'Light sleep duration',
                        'Sleep duration', 'deep sleep duration', 'fall sleep duration', 'turnover times', 'score',
                        'sleep data', 'breath data', 'heart rate data'
                    ]);

                }

                foreach ( $datas as $row_data ) {

                    $email = $row_data->user ? $row_data->user->email : "";

                    $excel_row = array_prepend( $row_data->to_excel_row(), $email );

                    $sheet->appendRow( $excel_row );
                }

            });
        })->download('xlsx');

    }
}
