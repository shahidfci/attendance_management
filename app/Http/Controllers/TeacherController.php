<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Setting;

class TeacherController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::latest()->get();
        return view('teachers.index',compact('teachers'));
    }

    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $designation    = Setting::where('type', 7)->get();
        $department     = Setting::where('type', 8)->get();
        return view('teachers.create',[
            'designations'  => $designation,
            'departments'   => $department,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'employe_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:teachers,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile' => ['required'],
            'designation' => ['required'],
            'gender' => ['required'],
            'birth_date' => ['required'],
            'address' => ['required'],
            //'image' => ['required'],
        ]);

        Teacher::create([
            'employe_id' => $request['employe_id'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'mobile' => $request['mobile'],
            'designation' => $request['designation'],
            'gender' => $request['gender'],
            'dept' => $request['dept'],
            'birth_date' => $request['birth_date'],
            'address' => $request['address'],
            //'image' => $request['image'],
            'is_active' => 1,
        ]);

        flash()->addSuccess('Teacher created successfully');
        return redirect()->route('teachers.index');
    }

    /*
     * Display the specified resource.
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.show', compact('teacher'));
    }

    /*
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        $designation    = Setting::where('type', 7)->get();
        $department     = Setting::where('type', 8)->get();
        return view('teachers.edit',[
            'teacher'       => $teacher,
            'designations'  => $designation,
            'departments'   => $department,
        ]);
    }

    /*
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        request()->validate([
            'employe_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:teachers,email,'.$teacher->id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile' => ['required'],
            'designation' => ['required'],
            'gender' => ['required'],
            'birth_date' => ['required'],
            'address' => ['required'],
            //'image' => ['required'],
        ]);

        $teacher->update([
            'employe_id' => $request['employe_id'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'mobile' => $request['mobile'],
            'designation' => $request['designation'],
            'gender' => $request['gender'],
            'dept' => $request['dept'],
            'birth_date' => $request['birth_date'],
            'address' => $request['address'],
            //'image' => $request['image'],
        ]);

        flash()->addSuccess('Teacher updated successfully');
        return redirect()->route('teachers.index');
    }

    /*
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        flash()->addSuccess('Teacher deleted successfully');
        return redirect()->route('teachers.index');
    }
}
