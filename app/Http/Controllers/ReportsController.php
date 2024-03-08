<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ReportsController extends Controller
{

    public $selectedOptions;
    public $listed = [];

    public function index()
    {
        $reports = Auth::user()->reports()->latest();

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
        $message = [
            'summary' => 'This reporting year must be a valid date'
        ];

        $attributes = request()->validate([
            'center' => 'required',
            'quater' => 'required',
            'summary' => 'required|date_format:Y',
            'strategic_focus' => 'required',
            'strategic_objective' => 'required',
            'strategic_initiative' => 'required',
            'date' => 'required|date',
            'comment_quater' => 'required',
            'status' => 'required',
        ], $message);

        $attributes['user_id'] = Auth::id();
        $reports = Reports::create($attributes);

        return redirect()->route('reports', [
            'reports' => $reports->id
        ])->with('success', 'Reports Created');
    }


   public function edit($id)
   {
    $report = Reports::find($id);

    // dd($report->user->first_name);
    return view('admin.update.update', compact('report'));
   }

}
