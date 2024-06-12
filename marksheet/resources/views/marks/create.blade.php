@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Marks</h1>
    <form action="{{ route('marks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="student_id">Student</label>
            <select name="student_id" class="form-control" required>
                @foreach ($students as $student)
                <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="subject_id">Subject</label>
            <select name="subject_id" class="form-control" required>
                @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }} ({{ $subject->subject_code }})</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="marks_out_of_25">Marks (out of 25)</label>
            <input type="number" name="marks_out_of_25" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="marks_out_of_75">Marks (out of 75)</label>
            <input type="number" name="marks_out_of_75" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
