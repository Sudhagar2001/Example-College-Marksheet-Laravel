<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectsController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('subjects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject_code' => 'required|string|max:50|unique:subjects',
        ]);

        Subject::create($request->all());
        return redirect()->route('subjects.index')->with('success', 'Subject created successfully');
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subjects.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject_code' => 'required|string|max:50|unique:subjects,subject_code,' . $id,
        ]);

        $subject = Subject::findOrFail($id);
        $subject->update($request->all());
        return redirect()->route('subjects.index')->with('success', 'Subject updated successfully');
    }

    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subjects.show', compact('subject'));
    }

    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return redirect()->route('subjects.index')->with('success', 'Subject deleted successfully');
    }
}
