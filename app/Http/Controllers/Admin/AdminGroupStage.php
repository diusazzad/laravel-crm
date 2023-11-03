<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminGroupStage extends Controller
{
    public function groupstages(){
        return view('admin.groupstage.dashboard');
    }
}
