@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create New Task</a>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="mt-4">
        @foreach($tasks as $task)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $task->title }}</h5>
                    <p class="card-text">{{ $task->description }}</p>
                    @if($task->required_skills)
                        <p><strong>Required Skills:</strong> {{ $task->required_skills }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection