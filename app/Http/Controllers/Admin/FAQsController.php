<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FAQsController extends Controller
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
        $faqs = Faq::paginate(15);

        return view('admin.faqs.list', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->formView( new Faq( ));
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
//            'answer:tc'   => 'required',
//            'question:tc' => 'required|string|max:1000',
            'answer:en'   => 'required',
            'question:en' => 'required|string|max:1000',
//            'answer:sc'   => 'required',
//            'question:sc' => 'required|string|max:1000',
//            'answer:th'   => 'required',
//            'question:th' => 'required|string|max:1000',
//            'answer:vn'   => 'required',
//            'question:vn' => 'required|string|max:1000',
//            'answer:id'   => 'required',
//            'question:id' => 'required|string|max:1000',


        ]);


        $faq = Faq::create($request->all());

        $faq->products()->sync( $request->products ?: [] );

        alert('FAQ #'. $faq->id.' created');

        return redirect()->route('admin.faqs.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        //
        return $this->formView($faq);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        //
        $this->validate($request, [
//            'answer:tc'   => 'required',
//            'question:tc' => 'required|string|max:1000',
            'answer:en'   => 'required',
            'question:en' => 'required|string|max:1000',
//            'answer:sc'   => 'required',
//            'question:sc' => 'required|string|max:1000',
//            'answer:th'   => 'required',
//            'question:th' => 'required|string|max:1000',
//            'answer:vn'   => 'required',
//            'question:vn' => 'required|string|max:1000',
//            'answer:id'   => 'required',
//            'question:id' => 'required|string|max:1000',
        ]);

        $faq->update($request->all());

        $faq->products()->sync( $request->products ?: [] );

        alert('FAQ #'. $faq->id.' updated');

        return redirect()->route('admin.faqs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        //
        $faq->delete();

    }


    protected function formView( Faq $faq ) {

        $products = Product::all()->mapWithKeys(function ($item) {
            return [ $item->id => $item->name_tc ];
        });

        return view('admin.faqs.form', compact('faq', 'products'));
    }

}
