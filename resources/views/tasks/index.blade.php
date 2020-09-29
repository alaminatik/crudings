@extends('layouts.master')

@section('content')

<h1>Task List</h1>
<p class="lead">All your tasks. <a href="{{ route('tasks.create') }}">Add a new one?</a></p>
<hr>

@stop