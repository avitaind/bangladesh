<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\User;
use App\DeviceData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-marketing-data');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = $request->get('search');

        if ( $search ) {
            $users = User::where('email', 'like', $search.'%')
                ->orWhere('phone', $search)
                ->orWhere('mobile', $search)
                ->paginate(20);
        } else {
            $users = User::paginate(20);
        }

        //
        return view('admin.customers.list', compact('users', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->formView(new User());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'name' => 'required',
            'birthday' => 'nullable|date',
            'email' => 'required|email',
            'password' => 'confirmed|min:8',
        ];

        $this->validate($request, $rules);

        $user = new User( $request->all() );
        $user->password = bcrypt( $request->password );
        $user->save();

        alert('Customer created');

        return redirect( route('admin.customers.show' , $user ) );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(User $customer)
    {
        //
        return view('admin.customers.show', ['user' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $customer)
    {
        return $this->formView($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $customer)
    {
        //
        //
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|confirmed|min:8',
            'birthday' => 'nullable|date',
        ];

        $this->validate($request, $rules);

        $data = $request->all();

        if (!$request->has('password')) {
            $data = array_except( $data, ['password', 'password_confirmation']);
        } else {
            $data['password'] = bcrypt($data['password']);
        }
        
        $customer->update( $data );

        alert('Customer updated');

        return redirect( route('admin.customers.show' , $customer ) );


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    protected function formView( User $user )
    {
        $countries = Country::all()->mapWithKeys(function ($item) {
            return [$item->code => $item->name() ];
        });
        return view('admin.customers.form', compact('user', 'countries'));
    }

    public function export(Request $request) {

        $users = User::select()->orderBy('country')->get( );

        \Excel::create('users', function ($excel) use ($users) {

            $excel->sheet('all', function ($sheet) use ($users) {

                $sheet->appendRow( [ 'Name', 'Email', 'Gender', 'Birthday', 'Country', 'Phone', 'Mobile', 'Accept EDM']);

                foreach ( $users as $user ) {

                    $row = [
                        $user->name,
                        $user->email,
                        $user->gender,
                        $user->present()->birthday,
                        $user->present()->country,
                        $user->phone,
                        $user->mobile,
                        $user->accept_edm ? "Y" : "N"
                    ];

                    $sheet->appendRow($row);


                }

            });

        })->download();

    }


    public function exportDeviceData(Request $request, User $user) {


        $device_type = $request->get('device_type');

        $datas = DeviceData::where('device_code', $device_type)
            ->where('user_id', $user->id)
            ->orderBy('record_time', 'asc')
            ->get();

        // Convert data to excel.
        \Excel::create('export-data-'.$user->id, function ($excel) use ($datas, $device_type) {

            $excel->sheet('Datas', function ($sheet) use( $datas, $device_type) {

                if ( $device_type == 'scale') {

                    $sheet->appendRow([
                        'Record Date',  'Body Weight', 'Water Rate', 'Muscle rate', 'Subcutaneous fat rate',
                        'Visceral fat level', 'Basic metabolism', 'Bond Weight', 'Fat Rate', 'Protein'
                    ]);

                } else if ( $device_type == 'sleepband') {

                    $sheet->appendRow([
                        'Record Date',  'Start Time', 'End Time', 'Wake duration', 'Light sleep duration',
                        'Sleep duration', 'deep sleep duration', 'fall sleep duration', 'turnover times', 'score',
                        'sleep data', 'breath data', 'heart rate data'
                    ]);

                }

                foreach ( $datas as $row_data ) {
                    $sheet->appendRow($row_data->to_excel_row());
                }

            });
        })->download('xlsx');

    }

}
