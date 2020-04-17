@extends('layouts.main')

@section('title', 'To-Do Main')

@section('content')
        <x-error-block />
        <x-info-block />
        <form action="/task/{{ $task->id }}" method="POST">
            @csrf
            <div id="myDIV" class="header">
              <input type="text" name="title" value="{{ $task->title }}" placeholder="Title...">
              @method('PUT')
              <button type="submit" class="addBtn">Edit</button>
            </div>
        </form>  
@stop

 