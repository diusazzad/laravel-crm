<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminStackedByOwner extends Controller
{
    public function stackownerindex(){
        return view('admin.stackowners.dashboard');
    }
}
