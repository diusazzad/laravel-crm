<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class AdminOpportunitiesController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function leadsindex()
    {



        $leads = Lead::all();
        // Get all leads from the database

// Pass the leads to the view
         return view('admin.dashboard', compact('leads'));
    }

}
