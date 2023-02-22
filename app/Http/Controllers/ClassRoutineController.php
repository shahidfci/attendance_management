<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Class_routine;
use App\Models\Setting;
use App\Models\Course;
use App\Models\Teacher;

class ClassRoutineController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $class_routines = Class_routine::latest()->get();
        return view('class-routines.index',compact('class_routines'));
    }

    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $day        = Setting::where('type', 1)->where('is_active', 1)->get();
        $timeslot   = Setting::where('type', 2)->where('is_active', 1)->get();
        $room       = Setting::where('type', 3)->where('is_active', 1)->get();
        $semester   = Setting::where('type', 4)->where('is_active', 1)->get();
        $session    = Setting::where('type', 5)->where('is_active', 1)->get();
        $year       = Setting::where('type', 6)->where('is_active', 1)->get();
        $designation = Setting::where('type', 7)->where('is_active', 1)->get();
        $dept       = Setting::where('type', 8)->where('is_active', 1)->get();
        $course     = Course::where('is_active', 1)->get();
        $teacher    = Teacher::where('is_active', 1)->get();

        return view('class-routines.create',[
            'days'      => $day,
            'timeslots' => $timeslot,
            'rooms'     => $room,
            'semesters' => $semester,
            'sessions'  => $session,
            'years'     => $year,
            'designations' => $designation,
            'depts'     => $dept,
            'courses'   => $course,
            'teachers'  => $teacher,
        ]);
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'program' => ['required'],
            'semester' => ['required'],
            'day' => ['required'],
            'year' => ['required'],
            'timeslot' => ['required'],
            'course' => ['required'],
            'teacher' => ['required'],
            'session' => ['required'],
        ]);

        Class_routine::create([
            'program_id' => $request['program'],
            'semester_id' => $request['semester'],
            'day_id' => $request['day'],
            'year_id' => $request['year'],
            'time_slot_id' => $request['timeslot'],
            'course_id' => $request['course'],
            'teacher_id' => $request['teacher'],
            'aca_session' => $request['session'],
            'is_active' => 1,
        ]);

        flash()->addSuccess('Class routine created successfully');
        return redirect()->route('class-routines.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
