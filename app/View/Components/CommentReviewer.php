<?php

namespace App\View\Components;

use App\Models\TestCaseDataRequirement;
use App\Models\TestCase;
use App\Models\TestCaseStep;
use Illuminate\View\Component;

class CommentReviewer extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public $step_id;

    
    public function render()
    {
        return view('livewire.reviewers.comment');
    }
}
