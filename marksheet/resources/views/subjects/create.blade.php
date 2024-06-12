@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Subject</h1>
    <form action="{{ route('subjects.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Subject Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="subject_code">Subject Code</label>
            <input type="text" name="subject_code" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
