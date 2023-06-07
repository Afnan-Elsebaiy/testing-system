<?php

namespace App\View\Components;

use App\Models\Status;
use App\Models\TestCase;
use App\Models\TestCaseDataRequirement;
use App\Models\TestCaseStep;
use Illuminate\View\Component;

class CreateExecutor extends Component
{
    
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */  
    public function render()
    {
        $statuses = Status::all();
        $testcasesteps = TestCaseStep::all();
        return view('livewire.executors.create',compact('testcasesteps','statuses'));
    }
}