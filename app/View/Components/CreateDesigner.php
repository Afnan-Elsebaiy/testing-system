<?php

namespace App\View\Components;

use App\Models\Priority;
use App\Models\Project;
use App\Models\Status;
use App\Models\TestCase;
use Illuminate\View\Component;

class CreateDesigner extends Component
{

    public $status_id;
    public $status = 2;
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $projects = Project::all();
        $dependencies = TestCase::all();
        $statuses = Status::all();
        $priorities= Priority:: all();
        return view('livewire.designers.createdesigner',compact('projects','dependencies','statuses','priorities'));
    }
}
