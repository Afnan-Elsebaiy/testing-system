<?php

namespace App\View\Components;

use App\Models\Status;
use App\Models\TestCase;
use App\Models\TestCaseDataRequirement;
use App\Models\TestCaseStep;
use Illuminate\View\Component;

class ShowTestDataExecutor extends Component
{
    
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */  
    public function render()
    {
    
        $testdata = TestCaseDataRequirement::all();
        return view('livewire.executors.showtestdata',compact('testdata'));
    }
}
