<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminGroupOwnerController extends Controller
{
    public function groupbyindex(){
        return view('admin.analytics.dashboard');
    }
}
