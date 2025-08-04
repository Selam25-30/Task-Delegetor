@extends('layouts.app')

@section('content')
<h2>Create Task</h2>
<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required><br>

    <label>Description:</label>
    <textarea name="description"></textarea><br>

    <label>Required Skills (comma separated):</label>
    <input type="text" name="required_skills"><br>

    <button type="submit">Save Task</button>
</form>
@endsection
