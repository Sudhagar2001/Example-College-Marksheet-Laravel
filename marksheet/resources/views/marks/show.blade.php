@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mark Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $mark->student->name }} - {{ $mark->subject->name }} ({{ $mark->subject->subject_code }})
        </div>
        <div class="card-body">
            <p><strong>Student Name:</strong> {{ $mark->student->name }}</p>
            <p><strong>Subject:</strong> {{ $mark->subject->name }}</p>
            <p><strong>Subject Code:</strong> {{ $mark->subject->subject_code }}</p>
            <p><strong>Marks (out of 25):</strong> {{ $mark->marks_out_of_25 }}</p>
            <p><strong>Marks (out of 75):</strong> {{ $mark->marks_out_of_75 }}</p>
            <p><strong>Total Marks:</strong> {{ $mark->total_marks }}</p>
        </div>
    </div>
    <a href="{{ route('marks.index') }}" class="btn btn-secondary mt-3">Back to Marks</a>
</div>
@endsection
