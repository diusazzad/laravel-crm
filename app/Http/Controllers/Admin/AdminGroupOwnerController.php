<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\UserFullInfo;
use Illuminate\Http\Request;

class AdminGroupOwnerController extends Controller
{
    public function groupbyindex(){
        return view('admin.analytics.dashboard');
    }

    public function show()
    {
        // $leads = Lead::all();
        // // Get all leads from the database

        // // Pass the leads to the view
        //  return view('admin.analytics.dashboard', compact('leads'));



        $lead = Lead::first();
        // Get the first lead from the database

        // Pass the lead to the view
        return view('admin.analytics.dashboard', compact('lead'));

        // $leads = Lead::all();
        // $userFullInfos = UserFullInfo::all();

        // // Pass the leads and user full infos to the view
        // return view('admin.analytics.dashboard', compact('leads', 'userFullInfos'));

    //     $leads = Lead::join('user_full_infos', 'leads.id', '=', 'user_full_infos.lead_id')->get();

    // // Pass the leads to the view
    // return view('admin.analytics.dashboard', compact('leads'));

    }
}
