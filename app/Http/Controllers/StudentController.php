<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|numeric|unique:students,nis',
            'name' => 'required|string|max:255',
            'classroom' => 'required|in:X IPA 1,X IPS 1,XI IPA 2',
            'birth_date' => 'required|date',
            'average_score' => 'required|numeric|min:0|max:100',
            'parent_phone' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        Student::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'classroom' => $request->classroom,
            'birth_date' => $request->birth_date,
            'average_score' => $request->average_score,
            'is_active' => $request->has('is_active') ? true : false,
            'address' => $request->address,
            'parent_phone' => $request->parent_phone,
        ]);

        return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nis' => 'required|numeric|unique:students,nis,' . $student->id,
            'name' => 'required|string|max:255',
            'classroom' => 'required|in:X IPA 1,X IPS 1,XI IPA 2',
            'birth_date' => 'required|date',
            'average_score' => 'required|numeric|min:0|max:100',
            'parent_phone' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        $student->update([
            'nis' => $request->nis,
            'name' => $request->name,
            'classroom' => $request->classroom,
            'birth_date' => $request->birth_date,
            'average_score' => $request->average_score,
            'is_active' => $request->has('is_active') ? true : false,
            'address' => $request->address,
            'parent_phone' => $request->parent_phone,
        ]);

        return redirect()->route('students.index')->with('success', 'Data siswa berhasil diubah!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
