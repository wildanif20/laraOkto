<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SweetalertController extends Controller
{
    public function alert()
    { 
        return view('welcome');
    }
}
