<?php

namespace App\Http\Controllers;

use App\Events\RemiderEvent;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\EventDispatcher\Event;

class RemiderController extends Controller
{
    public function create(){
        return view('remiders.create');
    }

    public function store(Request $request){
        $getuser = User::where('email', $request->email)->first();

        if($getuser){
            $user = Sentinel::findById($getuser->id);
            ($remider = Reminder::exists($user)) || ($remider = Reminder::create($user));
            Event::fire(new RemiderEvent($user, $remider));
            Session::flash('notice', 'Chech your email for instruction');
        } else {
            Session::flash('error', 'Email not valid');
        }
        return view('remiders.create');
    }

    public function edit($id, $code){
        $user = Sentinel::findById($id);

        if(Reminder::exists($user, $code)){
            return view('remiders.edit', ['id' => $id, 'code' => $code]);
        } else {
            return redirect('/');
        }
    }

    public function update(ReminderRequest $request, $id, $code){
        $user = Sentinel::findById($id);
        $remider = Remider::exists($user, $code);

        if($remider){
            Session::flash('notice', 'You password success midified');
            Reminder::complete($user, $code, $request->password);
            return redirect('login');
        } else {
            Session::flash('error', 'Password must match.');
        }
    }
}
