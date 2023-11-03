<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAllCloseWon extends Controller
{
    public function closewondashboard(){
        return view('admin.closewon.dashboard');
    }
}
