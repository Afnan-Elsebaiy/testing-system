<?php

namespace App\View\Components;

use App\Models\TestCase;
use Illuminate\View\Component;

class HistoryDesigner extends Component
{
    public $sortField = 'id';
    public $sortDirection = 'asc';
    public $searchTerm = '';
    public $result_no = 20;
    public $search = '';
    public $ids;
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }
    public function edit($id)
    {
        $testcases = TestCase::where('id',$id)->first();
        $this->ids = $testcases->id;
    }


    public function render()
    {
        $testcases = TestCase::when($this->search, function ($searchquery) {
            $searchquery->where(function ($queryx) {
                $queryx->where('test_cases.id', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.title', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.module_name', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.project_id', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.description', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.dependency_id', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.priority_id', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.status_id', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.test_browser', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.pre_condition', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.post_condition', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.designer_id', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.designer_comment', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.reviewer_id', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.reviewer_comment', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.reviewed_at', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.executor_id', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.executor_comment', 'like', '%' . $this->search . '%')
                    ->orWhere('test_cases.executed_at', 'like', '%' . $this->search . '%');
            });
        })->orderBy($this->sortField, $this->sortDirection)->paginate($this->result_no);
        return view('livewire.histories.index', compact('testcases'));

    }
}