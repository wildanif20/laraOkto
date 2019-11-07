<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function signup()
    { 
        return view('users.signup');
    }

    public function signup_store(UserRequest $request)
    {
        $credential = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        Sentinel::registerAndActivate($credential);
        Session::flash('notice','Success create new user');
        return redirect()->route('login');
    }
}
