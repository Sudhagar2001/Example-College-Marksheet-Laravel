@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Details</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $student->name }}</p>
            <p><strong>Register No:</strong> {{ $student->register_no }}</p>
            <p><strong>Degree:</strong> {{ $student->degree }}</p>
            <p><strong>Branch:</strong> {{ $student->branch }}</p>
            <p><strong>Date of Birth:</strong> {{ $student->date_of_birth }}</p>
            <p><strong>Month/Year of Exam:</strong> {{ $student->month_year_exam }}</p>
            <p><strong>Semester:</strong> {{ $student->semester }}</p>
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
