<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class CourseController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::latest()->get();
        return view('courses.index',compact('courses'));
        
    }

    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
            'details' => ['required'],
        ]);

        Course::create([
            'name' => $request['name'],
            'code' => $request['code'],
            'details' => $request['details'],
            'is_active' => 1,
        ]);

        flash()->addSuccess('Course created successfully');
        return redirect()->route('courses.index');
    }

    /*
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /*
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit',compact('course'));
    }

    /*
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
            'details' => ['required'],
        ]);

        $course->update([
            'name' => $request['name'],
            'code' => $request['code'],
            'details' => $request['details'],
        ]);

        flash()->addSuccess('Course updated successfully');
        return redirect()->route('courses.index');
    }

    /*
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        flash()->addSuccess('Course deleted successfully');
        return redirect()->route('courses.index');
        
    }
    
}
