<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;


class TasksController extends Controller
{
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

        $this->validate($request, [
            'title' => 'required|regex:/([a-zA-Z]+\s?\b){2,}/'
        ]);
        $task = new Task([
            'title' => $request->input('title')
        ]);
        $task->save();



        return redirect()->back()->with([
            "info" => "Successfully saved."
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

        $task = Task::findOrFail($id);
        
        $this->validate($request, [
            'title' => 'required|regex:/([a-zA-Z]+\s?\b){2,}/'
        ]);
        $task->title = $request->input('title');
        $task->save();

        return redirect()->back()->with([
            "info" => "Successfully saved."
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
