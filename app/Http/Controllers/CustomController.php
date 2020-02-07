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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone'=>'required',
            'internship' => 'required',
            'college' => 'required',
            'fest'=>'required',
            'position'=>'required'
        ]);
     
        Campus::create($request->all());

        \Mail::send('emails.campus',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'internship' => $request->get('internship'),
                'college' => $request->get('college'),
                'fest' => $request->get('fest'),
                'position' => $request->get('position'),

            ), function ($message) use ($request)
            {
                $message->from('avitaind@gmail.com');
                $message->to('avitaind@gmail.com', 'Admin')->subject('Campus Ambassador Program');
    });

	    return redirect()->back()->with('message', 'Thank you for your submission . You shall receive a confirmation mail shortly');
       

}




}