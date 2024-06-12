<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;

class MarkController extends Controller
{
    /**
     * Show the form for creating a new mark.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marks = Mark::paginate(10); // Paginate the results with 10 items per page
        return view('marks.index', compact('marks'));
    }
    public function create()
    {
        $students = Student::all();
        $subjects = Subject::all();
        return view('marks.create', compact('students', 'subjects'));
    }

    /**
     * Store a newly created mark in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'marks_out_of_25' => 'required|numeric|min:0|max:25',
            'marks_out_of_75' => 'required|numeric|min:0|max:75',
        ]);

        // Create the mark
        Mark::create([
            'student_id' => $validatedData['student_id'],
            'subject_id' => $validatedData['subject_id'],
            'marks_out_of_25' => $validatedData['marks_out_of_25'],
            'marks_out_of_75' => $validatedData['marks_out_of_75'],
        ]);

        // Redirect with success message
        return redirect()->route('marks.index')->with('success', 'Marks added successfully');
    }

    /**
     * Show the form for editing the specified mark.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mark = Mark::findOrFail($id);
        $students = Student::all();
        $subjects = Subject::all();
        return view('marks.edit', compact('mark', 'students', 'subjects'));
    }

    /**
     * Update the specified mark in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'marks_out_of_25' => 'required|numeric|min:0|max:25',
            'marks_out_of_75' => 'required|numeric|min:0|max:75',
        ]);

        // Find the mark and update it
        $mark = Mark::findOrFail($id);
        $mark->update($validatedData);

        // Redirect with success message
        return redirect()->route('marks.index')->with('success', 'Marks updated successfully');
    }

    /**
     * Remove the specified mark from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the mark and delete it
        $mark = Mark::findOrFail($id);
        $mark->delete();

        // Redirect with success message
        return redirect()->route('marks.index')->with('success', 'Marks deleted successfully');
    }

    /**
     * Display the specified mark.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mark = Mark::findOrFail($id);
        return view('marks.show', compact('mark'));
    }
}
