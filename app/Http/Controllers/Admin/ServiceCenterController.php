<?php

namespace App\Http\Controllers\Admin;

use App\ServiceCenter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceCenterController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-service-data');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $centers = ServiceCenter::paginate(15);
        //
        return view('admin.service_center.index', compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service_center.form')->with('center', new ServiceCenter());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'latitude'        => 'required|numeric',
            'longitude'       => 'required|numeric',
            'name:en'         => 'required|string',
            'address:en'      => 'required|string',
            'opening_hour:en' => 'required|string',
            'phone:en'        => 'required|string',
            'fax:en'          => 'required|string',
            'email:en'        => 'required|string',
            'country' => 'required',
        ]);

        $service_center = new ServiceCenter($request->all());
        $service_center->save();

        alert('Service Center created');

        return redirect()->route('admin.service_centers.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceCenter $serviceCenter)
    {
        //
        return view('admin.service_center.show')->with('center', $serviceCenter);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceCenter $serviceCenter)
    {
        return view('admin.service_center.form')->with('center', $serviceCenter);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceCenter $serviceCenter)
    {
        $this->validate($request, [
            'latitude'        => 'required|numeric',
            'longitude'       => 'required|numeric',
            'name:en'         => 'required|string',
            'address:en'      => 'required|string',
            'opening_hour:en' => 'required|string',
            'phone:en'        => 'required|string',
            'fax:en'          => 'required|string',
            'email:en'        => 'required|string',
            'country' => 'required',
        ]);

        $serviceCenter->update( $request->all() );

        alert('Service Center Updated');

        return redirect()->route('admin.service_centers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCenter $serviceCenter)
    {
        //
        $serviceCenter->delete();
        alert('Service Center Delete');
        return redirect()->route('admin.service_centers.index');


    }
}
