<?php

namespace App\View\Components;

use App\Models\Status;
use App\Models\TestCase;
use App\Models\TestCaseDataRequirement;
use App\Models\TestCaseStep;
use Illuminate\View\Component;

class showReviewer extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    protected $paginationTheme = 'bootstrap';

    public $sortField = 'id';
    public $sortDirection = 'asc';
    public $searchTerm = '';
    public $result_no_test_data = 20;
    public $search_test_data = '';
    public $result_step_no = 20;
    public $search_step = '';
    public $id;


    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }



    public function render()
    {
        $statuscase = Status::all();
  
        $testdata = TestCaseDataRequirement::when($this->search_test_data, function ($searchquery) {
            $searchquery->where(function ($queryx) {
                $queryx->where('test_case_data_requirements.id', 'like', '%' . $this->search_test_data . '%')
                    ->orWhere('test_case_data_requirements.test_case_step_id', 'like', '%' . $this->search_test_data . '%')
                    ->orWhere('test_case_data_requirements.field_name', 'like', '%' . $this->search_test_data . '%')
                    ->orWhere('test_case_data_requirements.old_value', 'like', '%' . $this->search_test_data . '%')
                    ->orWhere('test_case_data_requirements.new_value', 'like', '%' . $this->search_test_data . '%');
            });
        })->orderBy($this->sortField, $this->sortDirection)->paginate($this->result_no_test_data);
        $testcasesteps = TestCaseStep::when($this->search_step, function ($searchquery) {
            $searchquery->where(function ($queryx) {
                $queryx->where('test_case_steps.id', 'like', '%' . $this->search_step . '%')
                    ->orWhere('test_case_steps.test_case_id', 'like', '%' . $this->search_step . '%')
                    ->orWhere('test_case_steps.title', 'like', '%' . $this->search_step . '%')
                    ->orWhere('test_case_steps.description', 'like', '%' . $this->search_step . '%')
                    ->orWhere('test_case_steps.expected_result', 'like', '%' . $this->search_step . '%')
                    ->orWhere('test_case_steps.actual_result', 'like', '%' . $this->search_step . '%')
                    ->orWhere('test_case_steps.status_id', 'like', '%' . $this->search_step . '%')
                    ->orWhere('test_case_steps.designer_comment', 'like', '%' . $this->search_step . '%')
                    ->orWhere('test_case_steps.reviewer_comment', 'like', '%' . $this->search_step . '%')
                    ->orWhere('test_case_steps.executor_comment', 'like', '%' . $this->search_step . '%');
            });
        })->orderBy($this->sortField, $this->sortDirection)->paginate($this->result_step_no);
        return view('livewire.reviewers.show', compact('testcasesteps', 'testdata','statuscase'));
    }
}
