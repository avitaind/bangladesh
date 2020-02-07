<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function getHome( ) {
        return view('admin.home');
    }

    function showChangePasswordForm( ){

        $user = \Auth::guard('admin')->user();

        return view('admin.profile', compact('user'));

    }

    function updateChangePasswordForm(Request $request) {

        $this->validate($request, [
            'user_id' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8|same:password',
        ]);

        $user = \Auth::guard('admin')->user();
        
        if ( $user->id != $request->get('user_id')) {
            abort( 500);
        }

        $admin = Admin::find( $request->get('user_id') );
        $admin->password = bcrypt( $request->get('password'));
        $admin->update();

        alert('Your password has been changed');

        return redirect( url( 'admin/change_password' ));


    }

}
