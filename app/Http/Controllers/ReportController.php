<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {

        $reports = User::all();
        return view('reports', [
            'reports' => $reports
        ]);
    }
}
