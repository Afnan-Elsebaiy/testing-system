<?php

namespace App\View\Components;

use App\Models\TestCaseDataRequirement;
use App\Models\TestCase;
use App\Models\TestCaseStep;
use Illuminate\View\Component;

class TestDataDesigner extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    
    public function render()
    {
        $testdatadetails = TestCaseDataRequirement::all();
        return view('livewire.designers.createdesignertestdata',compact('testdatadetails'));
    }
}
