<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductType;

class ProductTypesController extends Controller
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
        $product_types = ProductType::paginate(15);
        return view('admin.product_types.list', compact('product_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->formView(new ProductType());
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
            'name_en' => 'required',
            'name_tc' => 'required',
            'name_sc' => 'required',
            'name_th' => 'required',
            'name_vn' => 'required',
            'name_id' => 'required',
        ];

        $this->validate($request, $rules);
        $product_type = ProductType::create($request->all());

        alert("Product Type created");

        return redirect(route('admin.product_types.index', $product_type));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductType  $product_type
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $product_type)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ProductType  $product_type
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductType $product_type)
    {
        //
        return $this->formView($product_type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductType  $product_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductType $product_type)
    {
        //
        $rules = [
            'name_en' => 'required',
            'name_tc' => 'required',
            'name_sc' => 'required',
            'name_th' => 'required',
            'name_vn' => 'required',
            'name_id' => 'required',
        ];

        $this->validate($request, $rules);

        $data = $request->all();

        $product_type->update( $data );

        alert('Product Type updated');

        return redirect( route('admin.product_types.index' , $product_type ) );

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

    protected function formView(ProductType $product_type)
    {
        return view('admin.product_types.form', compact('product_type'));
    }
}
