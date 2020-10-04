@extends('layouts.master')

@section('content')

<h1>Task List</h1>
<p class="lead">All your tasks. <a href="{{ route('tasks.create') }}">Add a new one?</a></p>
<hr>
@if(Session::has('flash_message'))
    <div class="alert alert-danger">
        {{ Session::get('flash_message') }}
    </div>
@endif
@foreach($tasks as $task)
    <h3>{{ $task->title }}</h3>
    <p>{{ $task->description}}</p>
    <p>
        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View Task</a>
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
    </p>
    <hr>
@endforeach

@stop