<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\JobPertama; //1
use App\Jobs\JobKedua; //2
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //    $this->middleware('sentinel'); //2
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizedRole(['employee', 'manager']);
        return view('home');
    }

    //Function test jobs
    public function tesJob()
    { 
        JobPertama::dispatch("Belajar queue dengan");
        JobKedua::dispatch("Laravel");
        return "Berhasil";
    }


    public function gallery()
    {
        return view('menu/gallery');
    }

    public function profile()
    {
        return view('menu/profile');
    }

    public function contact()
    {
        return view('menu/contact');
    }
}
