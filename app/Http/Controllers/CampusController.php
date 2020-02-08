<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


use App\Http\Requests;

use App\Campus;

class CampusController extends Controller
{
    public function index(){

        return view('campus');
    }
 
  
    public function storeDevice(Request $request){
     
        $campus = new Campus([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'internship' => $request->get('internship'),
            'college' => $request->get('college'),
            'fest' => $request->get('fest'),
            'position' => $request->get('position'),
        
        ]);

        $campus->save();

        \Mail::send('emails.campus',
        array(
            'name' => $request->get('name'),

        ), function ($message) use ($request)
        {
            $email = $request->input('email');
            $name = $request->input('name');

            $message->from('contact@avita-bangladesh.com');
            $message->to($email, $name)->subject('Campus Ambesdor Program');
        });


      
        return redirect()->back()->with('message', 'Thank you for your submission. You shall receive a confirmation mail shortly!');

    }
}
