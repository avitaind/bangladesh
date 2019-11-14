<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductModel;
use App\Product;

class ProductModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = ProductModel::paginate(15);
        return view('admin.product_models.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        //
        return $this->formView( $product, new ProductModel());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        //
        $rules = [
            'model_number' => 'required',
            'name_en' => 'required',
            'name_tc' => 'required',
        ];

        $this->validate($request, $rules);
        $model = $product->productModels()->create( $request->all() );

        alert("Product Model created");

        return redirect(route('admin.products.show', $product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @param \App\ProductModel  $model
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, ProductModel $model)
    {
        //
        return $this->formView($product, $model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Product $product
     * @param \App\ProductModel  $model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, ProductModel $model)
    {

        $rules = [
            'model_number' => 'required',
            'name_en' => 'required',
            'name_tc' => 'required',
        ];

        $this->validate($request, $rules);

        $data = $request->all();

        $model->update( $data );

        alert('Product Model updated');

        return redirect(route('admin.products.show', $product));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductModel  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductModel $product)
    {
        //
    }


    protected function formView(Product $product, ProductModel $model)
    {
        return view('admin.product_models.form', compact( 'product', 'model'));
    }
}
