<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StoreStudentRequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('position','asc')->paginate(10);
        return view('admin.student.index', compact('students'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('admin.student.create',compact('courses'));
    }

    public function store(StoreStudentRequest $request)
    {
        $registrationNo = 'REG-' . strtoupper(uniqid());
        Student::create($request->validated() + [
            'registration_no' => $registrationNo,
        ]);
        Alert::success('Student added successfully');
        return back();
    }
    public function edit(Student $student)
    {
        $courses = Course::all();
        return view('admin.student.edit', compact('student','courses'));
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        if ($request->hasFile('image') && $image = $student->getRawOriginal('image')) {
            $this->deleteFile($image);
        }
        $student->update($request->validated());
        Alert::success('Student updated successfully');
        return redirect(route('admin.student.index'));
    }

    public function destroy(Student $student)
    {
        $student->delete();
        Alert::success('Student deleted successfully');
        return back();
    }
}
