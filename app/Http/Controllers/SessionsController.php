<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use Session;
use Sentinel;

class SessionsController extends Controller
{
    public function login()
    {
        if ($user = Sentinel::check()) {
            Session::flash("notice", 'You has login' . $user->email);
            return redirect('/');
        } else {
            return view('sessions.login');
        }
    }

    public function login_store(SessionRequest $request)
    {
        if ($user = Sentinel::authenticate($request->all())) {
            Session::flash('notice', 'welcome' . $user->email);
            if (Sentinel::getUser()->roles()->first()->slug == 'admin') {
                return redirect()->route('admin.dashboard');
                
            }               

        } else {
            Session::flash('erro', 'Login fails');
            return view('sessions.login');
        }
    }

    public function logout()
    {
        Sentinel::logout();
        Session::flash('notice', 'logout success');
        return redirect('/');
    }
}
