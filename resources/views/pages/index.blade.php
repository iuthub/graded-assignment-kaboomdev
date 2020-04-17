@extends('layouts.main')

@section('title', 'To-Do Main')

@section('content')
        <x-error-block />
        <x-info-block :info="$info ?? ''" />
        <form action="/task" method="POST">
            @csrf
            <div id="myDIV" class="header">
              <h2>My To Do List</h2>
              <input type="text" name="title" placeholder="Title...">
              <button type="submit" class="addBtn">Add</button>
            </div>
        </form>
        
        @if (count($tasks))
          <ul id="myUL">
            @foreach ($tasks as $task)
              <x-task-item :title="$task->title" :id="$task->id" />
            @endforeach
          </ul>
        @else 
          <h3>You have no tasks yet.</h3>
        @endif
        
@stop

 