<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductRegistration;

class RegistrationsController extends Controller
{

    public function __construct()
    {

        $this->middleware('can:manage-marketing-data,manage-service-data');
    }


    public function showRegistrationList( ) {
        $product_reg = ProductRegistration::paginate(20);

        // dd($product_reg);
        return view('admin.registrations.list', compact('product_reg'));
    }


}
