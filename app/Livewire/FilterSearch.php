<?php

namespace App\Livewire;

use App\Models\Reports;
use Livewire\Component;

class FilterSearch extends Component
{
    public $filterSearch;

    public function render()
    {
        $reportsFilter = Reports::search($this->filterSearch)->paginate();

        $years = $this->calculateYears();
        return view('livewire.filter-search', compact('years', 'reportsFilter'));
    }

    public function calculateYears()
    {
        $currentYear = date('Y'); //Get the current year from the system
        $initailYear = $currentYear - 3;
        $endYear = $currentYear + 3;

        $years = range($initailYear, $endYear); //Generates an array of years within the range from the start year
        return $years;
    }
}
