<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewReportsController extends Controller
{
    public function index()
    {
        return view('new',[
            'yearsRange' => $this->calculateYears()
        ]);
    }

    
    // Function to Calculate the years of submittion
    public function calculateYears()
    {
        $currentYear = date('Y'); //Get the current year from the system
        $initailYear = $currentYear - 3;
        $endYear = $currentYear + 3;

        $years = range($initailYear, $endYear); //Generates an array of years within the range from the start year
        return $years;
    }
}
