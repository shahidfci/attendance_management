<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Class_routine;

class ClassRoutineController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $class_routines = Class_routine::latest()->paginate(10);
        return view('class-routine.index',compact('class_routines'));
    }

    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('class-routine.create');
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
        return redirect()->route('class-routine.index');
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
