<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }

}
