<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCloseDates extends Controller
{
    public function adminclosedatedashboard(){
        return view('admin.closedate.dashboard');
    }
}
