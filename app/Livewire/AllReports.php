<?php

namespace App\Livewire;

use App\Models\Reports;
use Livewire\Component;

class AllReports extends Component
{
    public function render()
    {
        $reports = Reports::get();
        return view('livewire.all-reports',[
            'reports' => $reports
        ]);
    }
}
