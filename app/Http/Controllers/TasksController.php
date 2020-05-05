<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;


class TasksController extends Controller
{
    
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index', [
            'tasks' => Task::all()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = request()->validate([
            'title' => 'required'
        ]);
        $info = "Successully saved";
        
        if (!auth()->user()->tasks()->create($data)) {
            $info = "Unsuccessul save";
        }

        return redirect()->back()->with([
            "info" => $info
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        
        $this->authorize('update', $task); 
        
        return view('pages.edit', [
            'task' => $task
        ]);
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

        $model = \App\Task::findOrFail($task);
        $data = request()->validate([
            'title' => 'required'
        ]);
        
        $info = "Successully updated";
        if (!$model->update($data)) {
            $info = "Unsuccesful update";

        }
        return redirect()->route("task.index")->with([
            "info" => $info
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        if ($task->delete()) {
            return redirect()->route("task.index")->with([
                "info" => "Successfully deleted."
            ]);
        } else {
            return redirect()->back()->with([
                "info" => "Deletion wasn't successful."
            ]);
        }

    }
}
