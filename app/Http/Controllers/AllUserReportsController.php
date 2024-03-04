<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use App\Models\User;
use Illuminate\Http\Request;

class AllUserReportsController extends Controller
{
    public function index(User $user, Reports $reports) 
    {
        return view('admin.all-reports', [
            'reports' => $reports->latest()
        ]);
    }

    // // Update Report Class
    // public function update(User $user, Reports $reports)
    // {
    //     return view('admin.update.update',[
    //         "reports" => $reports
    //     ]);
    // }

    // // Update Report Class
    // public function store()
    // {
    //     dd('working');
    // }
}
