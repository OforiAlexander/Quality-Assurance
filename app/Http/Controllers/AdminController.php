<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function index(User $users, Reports $reports)
    {
        $totalUsers = $users->count();
        $allReports = $reports->count();

        $adminReports = Auth::user()->reports()->count();
        return view('admin.admin',[
            'users' => $totalUsers,
            'reports' => $allReports,
            'adminReports' => $adminReports
        ]);
    }
}
