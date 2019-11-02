<?php

namespace App\Http\Controllers\Admin;

use App\ServiceProvider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceProviderController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:manage-users');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $providers = ServiceProvider::all();
        return view('admin.service_provider.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $provider = new ServiceProvider();
        return view('admin.service_provider.form', compact('provider'));
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
        $this->validate($request, [
            'name' => 'required',
        ]);

        $provider = new ServiceProvider($request->all());
        $provider->name =  $request->name;
        $provider->access_key = str_random(40);
        $provider->enabled = ($request->get('enabled') == 1);
        $provider->save();

        alert('Service Provider Created');
        return redirect(route('admin.service-provider.edit', $provider));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceProvider $service_provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceProvider $service_provider)
    {
        //
        return view('admin.service_provider.form')->with('provider', $service_provider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceProvider $service_provider)
    {
        //
        $this->validate($request, [
            'name' => 'required',
        ]);

        $provider = $service_provider;
        $provider->name =  $request->name;
        $provider->enabled = ($request->get('enabled') == 1);

        if ( $request->get('regenerate_access_key') == 1) {
            $provider->access_key = str_random(40);
        }

        $provider->update();

        alert('Service Provider Updated');
        return redirect(route('admin.service-provider.edit', $provider));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceProvider $service_provider)
    {
        $service_provider->delete();

        alert('Service Provider Deleted');
        return redirect(route('admin.service-provider.index'));
        //
    }
}
