<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminStackedByStage extends Controller
{
    public function stackstagesdashboard(){
        return view('admin.stackstage.dashboard');
    }
}
