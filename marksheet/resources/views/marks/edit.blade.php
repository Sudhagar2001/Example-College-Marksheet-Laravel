@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Marks</h1>
    <form action="{{ route('marks.update', $mark->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="student_id">Student</label>
            <select name="student_id" class="form-control" required>
                @foreach ($students as $student)
                <option value="{{ $student->id }}" {{ $student->id == $mark->student_id ? 'selected' : '' }}>
                    {{ $student->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="subject_id">Subject</label>
            <select name="subject_id" class="form-control" required>
                @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}" {{ $subject->id == $mark->subject_id ? 'selected' : '' }}>
                    {{ $subject->name }} ({{ $subject->subject_code }})
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="marks_out_of_25">Marks (out of 25)</label>
            <input type="number" name="marks_out_of_25" class="form-control" value="{{ $mark->marks_out_of_25 }}" required>
        </div>
        <div class="form-group">
            <label for="marks_out_of_75">Marks (out of 75)</label>
            <input type="number" name="marks_out_of_75" class="form-control" value="{{ $mark->marks_out_of_75 }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
