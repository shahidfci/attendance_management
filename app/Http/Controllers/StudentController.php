<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class StudentController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::latest()->get();
        return view('students.index',compact('students'));
        
    }

    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'roll_no' => ['required', 'min:6'],
            'reg_no' => ['required', 'min:6'],
            'mobile' => ['required'],
            'gender' => ['required'],
            'birth_date' => ['required'],
            'nid' => ['required', 'min:10'],
            'address' => ['required'],
        ]);

        Student::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'roll_no' => $request['roll_no'],
            'reg_no' => $request['reg_no'],
            'mobile' => $request['mobile'],
            'gender' => $request['gender'],
            'birth_date' => $request['birth_date'],
            'nid' => $request['nid'],
            'address' => $request['address'],
            'is_active' => 1,
        ]);

        flash()->addSuccess('Student created successfully');
        return redirect()->route('students.index');
    }

    /*
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /*
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /*
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students,email,'.$student->id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'roll_no' => ['required', 'min:6'],
            'reg_no' => ['required', 'min:6'],
            'mobile' => ['required'],
            'gender' => ['required'],
            'birth_date' => ['required'],
            'nid' => ['required', 'min:10'],
            'address' => ['required'],
        ]);

        $student->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'roll_no' => $request['roll_no'],
            'reg_no' => $request['reg_no'],
            'mobile' => $request['mobile'],
            'gender' => $request['gender'],
            'birth_date' => $request['birth_date'],
            'nid' => $request['nid'],
            'address' => $request['address'],
            'is_active' => 1,
        ]);

        flash()->addSuccess('Student updated successfully');
        return redirect()->route('students.index');
    }

    /*
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        flash()->addSuccess('Student deleted successfully');
        return redirect()->route('students.index');
        
    }
    
}
