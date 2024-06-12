@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Subject Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $subject->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">ID: {{ $subject->id }}</h5>
            <p class="card-text">Name: {{ $subject->name }}</p>
            <p class="card-text">Subject Code: {{ $subject->subject_code }}</p>
            <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('subjects.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
