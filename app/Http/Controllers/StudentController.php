<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }


    public function create()
    {
        return view('students.create');
    }

    public function store (Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('students')->with('flash_message', 'Student added successfully');
    }


    public function show(string $id)
    {
        $students = Student::find($id);
        return view('students.show')->with('students', $students);
    }

    public function edit(string $id)
    {
        $students = Student::find($id);
        return view('students.edit')->with('students', $students);
    }

    public function update(Request $request, string $id)
    {
        $students = Student::find($id);
        $input = $request->all();
        $students->update($input);
        return redirect('students')->with('flash_message', 'Student updated successfully');
    }


    public function destroy(string $id)
    {
        $students = Student::find($id);
        $students->delete();
        return redirect('students')->with('flash_message', 'Student deleted successfully');
    }
}