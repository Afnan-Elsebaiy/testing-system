<?php

namespace App\View\Components;

use App\Models\TestCaseDataRequirement;
use App\Models\TestCase;
use App\Models\TestCaseStep;
use Illuminate\View\Component;

class StepDesigner extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    
    public function render()
    {
        $testcases = TestCase::all();
        $designersteps = TestCaseStep::all();
        $testdatadetails = TestCaseDataRequirement::all();
        return view('livewire.designers.step',compact('testcases','designersteps','testdatadetails'));
    }
}
