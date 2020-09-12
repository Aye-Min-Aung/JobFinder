<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function dashboard(){
        return view('admin/dashboard');
    }

    public function company(){
        return view('admin/companylist');
    }

    public function job_seeker(){
        return view('admin/job_seeker_list');
    }
}
