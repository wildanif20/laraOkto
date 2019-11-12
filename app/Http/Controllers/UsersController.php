<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use App\Jobs\JobKedua;

class UsersController extends Controller
{
    public function signup()
    { 
        return view('users.signup');
    }

    public function signup_store(UserRequest $request)
    {
        // $credential = [
        //     'first_name' => $request->input('first_name'),
        //     'last_name' => $request->input('last_name'),
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password')
        // ];

        // Sentinel::registerAndActivate($credential);
        // Session::flash('notice','Success create new user');
        // return redirect()->route('login');

        DB::beginTransaction();
        try {
            $role = Sentinel::findRoleBySlug('writer'); //search role writer
            $role_id = $role->id;
            $credentials = [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ];
            $user = Sentinel::registerAndActivate($credentials);
            $user->roles()->attach($role_id);
            Session::flash('flash_message', 'Success create new user');
            JobKedua::dispatch($user);
            DB::commit(); //save DB
        } catch (\Trowable $error) {
            DB::rollBack(); //Rolleback if insert data have error
            Session::flash('error', $error);
        }

    }
}
