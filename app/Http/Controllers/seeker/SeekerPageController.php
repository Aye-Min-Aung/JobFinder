<?php

namespace App\Http\Controllers\seeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeekerPageController extends Controller
{
    public function login($value='')
    {
    	return view('seeker.login');
    }

    public function register($value='')
    {
    	return view('seeker.register');
    }
}
