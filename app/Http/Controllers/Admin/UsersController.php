<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-users');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.users.list', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->formView( new Admin() );
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins',
            'password' => 'nullable|min:8|confirmed',
            'password_confirmation' => 'nullable|same:password'
        ]);

        $admin = new Admin($request->all());
        $admin->password = bcrypt($request->get('password'));
        $admin->save();

        // Update Roles
        $roles = $request->get('roles');
        foreach ( $roles as $role ) {
            $admin->assign( $role );
        }

        return redirect(route('admin.users.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $user)
    {
        return $this->formView($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'password' => 'nullable|min:8|confirmed',
            'password_confirmation' => 'nullable|same:password'
        ]);

        $user->name = $request->get('name');

        if ( $request->has('password') ) {
            $user->password = bcrypt($request->get('password'));
        }

        $user->update();



        $roles = $request->get('roles', []);

        // Make sure current user have admin-right.
        $current_user = Auth::guard('admin')->user();
        if ( $current_user->id == $user->id ) {
            $roles[] = 'admin';
        }

        // Update Roles
        $user->roles()->detach();

        foreach ( $roles as $role ) {
            $user->assign( $role );
        }

        return redirect(route('admin.users.index'));
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

    protected function formView( Admin $admin ){

        $roles = [
            'admin' => 'Admin',
            'marketing-staff' => 'Marketing Team',
            'services-staff'  => "Services Team",
        ];

        $selected_roles = $admin->roles->map(function ( $role ) {
            return $role->name;
        })->toArray();

        // Make sure current user have admin-right.
        $current_user = Auth::guard('admin')->user();
        if ( $current_user->id == $admin->id ) {
            unset( $roles['admin']);
        }

        return view('admin.users.form', compact('admin', 'roles', 'selected_roles'));
    }
}
