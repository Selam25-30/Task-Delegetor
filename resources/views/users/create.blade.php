@extends('layouts.app')

@section('content')
<h2>Add User</h2>
<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required><br>

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Skills (comma separated):</label>
    <input type="text" name="skills"><br>

    <button type="submit">Add User</button>
</form>
@endsection
