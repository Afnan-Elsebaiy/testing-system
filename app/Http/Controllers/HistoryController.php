<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use App\Models\TestCase;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testcases = TestCase::all();

        return view('designers.histories.history', compact('testcases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testcase = TestCase::findOrfail($id);
        return view('designers.histories.show', compact('testcase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parents = TestCase::all();
        $priorities = Priority::all();
        $data = TestCase::findOrfail($id);
        // dd($data);
        return view('designers.histories.edit', compact('data' , 'priorities' , 'parents')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data =$request->validate([
            'title'=>'nullable|string',
            'module_name' => 'nullable|string',
            'project_id' => 'nullable|integer',
            'description' => 'nullable|string',
            'dependency_id' => 'nullable|integer',
            'priority_id' => 'nullable|integer',
            'pre_condition'=> 'nullable|string',
        ]);
        $testcase = TestCase::findOrFail($id);
        $testcase->update($data);
        return redirect()->route('history.index')->with('success', 'History Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
