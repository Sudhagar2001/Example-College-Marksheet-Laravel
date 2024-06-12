@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Marks</h1>
    <a href="{{ route('marks.create') }}" class="btn btn-primary">Add Marks</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Subject</th>
                <th>Subject Code</th>
                <th>Marks (out of 25)</th>
                <th>Marks (out of 75)</th>
                <th>Total Marks</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marks as $mark)
            <tr>
                <td>{{ $mark->id }}</td>
                <td>{{ $mark->student->name }}</td>
                <td>{{ $mark->subject->name }}</td>
                <td>{{ $mark->subject->subject_code }}</td>
                <td>{{ $mark->marks_out_of_25 }}</td>
                <td>{{ $mark->marks_out_of_75 }}</td>
                <td>{{ $mark->total_marks }}</td>
                <td>
                    <a href="{{ route('marks.show', $mark->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('marks.edit', $mark->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('marks.destroy', $mark->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
