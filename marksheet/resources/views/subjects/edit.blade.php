@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Subject</h1>
    <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Subject Name</label>
            <input type="text" name="name" class="form-control" value="{{ $subject->name }}" required>
        </div>
        <div class="form-group">
            <label for="subject_code">Subject Code</label>
            <input type="text" name="subject_code" class="form-control" value="{{ $subject->subject_code }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
