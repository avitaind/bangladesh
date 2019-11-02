<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\ProductType;
use App\WarrantyTerm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
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

        $all_products = Product::orderBy('country')->get()->groupBy(function ($product) {
//            return $product->countryString();
            return strtolower($product->short_code);
        });

        return view('admin.products.list', compact('all_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->formView( new Product() );
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
            'short_code'       => 'required',
            'name_en'          => 'required',
            'name_tc'          => 'required',
            'name_sc'          => 'required',
            'product_type_id'  => 'required',
            'warranty_term_id' => 'required',
            'spec_view'        => 'required',
            'feature_view'     => 'required',
            'extra_warranty'   => 'required|integer|min:0',
            'country' => 'required'
        ]);


        $product = new Product( $request->all() );
        $product->short_code = strtolower( $product->short_code );
        $product->save();

        alert('Product created');

        return redirect()->route('admin.products.show', $product);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('admin.products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return $this->formView($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $this->validate($request, [
            'short_code'       => 'required',
            'name_en'          => 'required',
            'name_tc'          => 'required',
            'name_sc'          => 'required',
            'product_type_id'  => 'required',
            'warranty_term_id' => 'required',
            'spec_view'        => 'required',
            'feature_view'     => 'required',
            'extra_warranty'   => 'required|integer|min:0',
            'country' => 'required'
        ]);

        $product->fill( $request->all() );
        $product->short_code = strtolower( $product->short_code );
        $product->update();

        alert('Product updated');

        return redirect()->route('admin.products.show', $product);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        alert('Product Page deleted.');
        return redirect()->route('admin.products.index');
    }



    public function formView( Product $product ) {

        $warranty_terms = WarrantyTerm::all()->mapWithKeys(function($item) {
            return array( $item->id => $item->title );
        });

        $product_types = ProductType::all()->mapWithKeys(function ($item) {
            return [$item->id => $item->name_tc ];
        });

        return view('admin.products.form', compact('product', 'warranty_terms', 'product_types'));
    }
}
