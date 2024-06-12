@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
        </div>
        <div class="form-group">
            <label for="register_no">Register No</label>
            <input type="text" name="register_no" class="form-control" value="{{ $student->register_no }}" required>
        </div>
        <div class="form-group">
            <label for="degree">Degree</label>
            <input type="text" name="degree" class="form-control" value="{{ $student->degree }}" required>
        </div>
        <div class="form-group">
            <label for="branch">Branch</label>
            <input type="text" name="branch" class="form-control" value="{{ $student->branch }}" required>
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" value="{{ $student->date_of_birth }}" required>
        </div>
        <div class="form-group">
            <label for="month_year_exam">Month/Year of Exam</label>
            <input type="text" name="month_year_exam" class="form-control" value="{{ $student->month_year_exam }}" required>
        </div>
        <div class="form-group">
            <label for="semester">Semester</label>
            <input type="number" name="semester" class="form-control" value="{{ $student->semester }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
