@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Students</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Register No</th>
                <th>Degree</th>
                <th>Branch</th>
                <th>Date of Birth</th>
                <th>Month/Year of Exam</th>
                <th>Semester</th>
                <th>Actions</th>
                <th>Download Marksheet</th> <!-- New column for download button -->
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->register_no }}</td>
                <td>{{ $student->degree }}</td>
                <td>{{ $student->branch }}</td>
                <td>{{ $student->date_of_birth }}</td>
                <td>{{ $student->month_year_exam }}</td>
                <td>{{ $student->semester }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('generate-pdf', $student->id) }}" class="btn btn-success">Generate PDF</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
