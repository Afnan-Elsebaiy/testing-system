<?php

namespace App\View\Components;

use App\Models\Status;
use App\Models\TestCase;
use App\Models\TestCaseDataRequirement;
use App\Models\TestCaseStep;
use Illuminate\View\Component;

class IndexExecutor extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    protected $paginationTheme = 'bootstrap';
    public $executor = 3;
    public $sortField = 'id';
    public $sortDirection = 'asc';
    public $searchTerm = '';
    public $result_no = 20;
    public $search = '';



    public function sortBy($field)
    {
        if($this->sortDirection == 'asc')
        {
            $this->sortDirection = 'desc';
        }
        else
        {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

    
    public function render()
    {
        $testcases = TestCase::when($this->search, function ($searchquery) {
            $searchquery->where(function ($queryx) {
                $queryx->where('test_cases.id', 'like', '%' . $this->search . '%')
                ->orWhere('test_cases.title', 'like', '%' . $this->search . '%')
                ->orWhere('test_cases.project_id', 'like', '%' . $this->search . '%')   
                ->orWhere('test_cases.module_name', 'like', '%' . $this->search . '%')   
                ->orWhere('test_cases.description', 'like', '%' . $this->search . '%')   
                ->orWhere('test_cases.priority_id', 'like', '%' . $this->search . '%')
                ->orWhere('test_cases.reviewer_id', 'like', '%' . $this->search . '%')  
                ->orWhere('test_cases.created_at', 'like', '%' . $this->search . '%')  
                ->orWhere('test_cases.pre_condition', 'like', '%' . $this->search . '%'); 
            });
        })->when($this->executor,function($statusquery){
            $statusquery->where('status_id',$this->executor);
        })->orderBy($this->sortField, $this->sortDirection)->paginate($this->result_no);
        return view('livewire.executors.index',compact('testcases'));
    }
}
