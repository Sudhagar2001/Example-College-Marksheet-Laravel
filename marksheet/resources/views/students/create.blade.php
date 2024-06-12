@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="register_no">Register No</label>
            <input type="text" name="register_no" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="degree">Degree</label>
            <input type="text" name="degree" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="branch">Branch</label>
            <input type="text" name="branch" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="month_year_exam">Month/Year of Exam</label>
            <input type="text" name="month_year_exam" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="semester">Semester</label>
            <input type="number" name="semester" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
