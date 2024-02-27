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
}
