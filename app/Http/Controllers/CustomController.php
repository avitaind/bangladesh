<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Campus;

class CustomController extends Controller
{

    public function index(){
        return view('campus');
    }

    public function store(Request $request)
    {
        console.log("Hello");
    }
}