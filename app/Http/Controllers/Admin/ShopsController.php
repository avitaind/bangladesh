<?php

namespace App\Http\Controllers\Admin;

use App\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shops = Shop::orderBy('id', 'desc')->paginate( 50 );

        return view('admin.shops.list')->with('shops', $shops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.shops.form' )->with('shop', (new Shop()) );
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
            'country'    => 'required',
//            'name:tc'    => 'required',     'address:tc' => 'required',
            'name:en'    => 'required',     'address:en' => 'required',
//            'name:sc'    => 'required',     'address:sc' => 'required',
//            'name:th'    => 'required',     'address:th' => 'required',
//            'name:vn'    => 'required',     'address:vn' => 'required',
//            'name:id'    => 'required',     'address:id' => 'required',

            'latitude'   => 'required|numeric',
            'longitude'  => 'required|numeric',
            'phone'      => 'required',
        ]);

        $shop = new Shop( $request->all() );
        $shop->enabled = ($request->get('enabled' ) == 1);
        $shop->save();

        alert('Shop Created');

        return redirect()->route('admin.shops.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return view('admin.shops.form', compact('shop') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //

        $this->validate($request, [
            'country'    => 'required',
//            'name:tc'    => 'required',     'address:tc' => 'required',
            'name:en'    => 'required',     'address:en' => 'required',
//            'name:sc'    => 'required',     'address:sc' => 'required',
//            'name:th'    => 'required',     'address:th' => 'required',
//            'name:vn'    => 'required',     'address:vn' => 'required',
//            'name:id'    => 'required',     'address:id' => 'required',
            'latitude'   => 'required|numeric',
            'longitude'  => 'required|numeric',
            'phone'      => 'required',
        ]);


        $shop->fill( $request->all() );
        $shop->enabled = ($request->get('enabled' ) == 1);
        $shop->update();

        alert('Shop Updated');

        return redirect()->route('admin.shops.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
        $shop->delete();

        alert("Shop Deleted");

        return redirect()->route('admin.shops.index');
    }
}
