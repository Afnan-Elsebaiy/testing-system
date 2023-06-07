<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use App\Models\TestCase;
use App\Models\TestCaseStep;
use App\Models\Priority;
use App\Models\Project;


class DesignerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     
    }

    public function designercasesteps()
    {
        $designersteps = TestCaseStep::all();
        return view('designers.designercase' , compact('designersteps'));
    }

    public function designercase(Request $request)
    {
        $data = $request->validate([
            'title'=>'nullable|string',
            'description'=>'nullable|string',
            'expected_result'=>'nullable|string',
            'designer_comment' => 'nullable|string',
        ]);
        $testcasesteps = TestCaseStep::create($data);

        return response()->json([
            'testcasesteps' => $testcasesteps,
        ]);

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        $dependency = TestCase::all();
        $statuscase = Status::all();
        $testpriority= Priority:: all();
        return view ('designers.create',compact('dependency','statuscase', 'testpriority','projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $data = $request->validate([
            'title'=>'nullable|string',
            'module_name' => 'nullable|string',
            'project_id' => 'nullable|integer',
            'description' => 'nullable|string',
            'dependency_id' => 'nullable|integer',
            'priority_id' => 'nullable|integer',
            'status_id' => 'nullable|integer',

            'pre_condition'=> 'nullable|string',
        ]);
        $data['designer_id'] = $user->id;
        // $testcase = TestCase::create($data);
        // return view('designers.index');
       

        $testcase = TestCase::create($data);
        return redirect()->route('designer.designercasesteps',$testcase->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
