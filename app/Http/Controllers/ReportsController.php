<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ReportsController extends Controller
{
    public function index()
    {
        $reports = Reports::latest();

        if (request('search')) {
            $reports
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('facilitator', 'like', '%' . request('search') . '%');
        }


        return view('reports', [
            'reports' => $reports->paginate(10)
        ]);
    }

    public function store()
    {
        
        $attributes = request()->validate([
            'title' => 'required',
            'facilitator' => 'required',
            'attendees_number' => 'required|integer',
            'summary' => 'required|string',
            'date' => 'required|date',
        ]);

        $reports = Reports::create($attributes);

        return redirect()->route('reports', ['reports' => $reports->id])->with('success', 'Reports Created');
    }

}
