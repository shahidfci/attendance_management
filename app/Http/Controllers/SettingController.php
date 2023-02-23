<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    /* Display a listing in index */
    public function index()
    {
        $day            = Setting::where('type', 1)->get();
        $timeslot       = Setting::where('type', 2)->get();
        $room           = Setting::where('type', 3)->get();
        $semester       = Setting::where('type', 4)->get();
        $session        = Setting::where('type', 5)->get();
        $year           = Setting::where('type', 6)->get();
        $designation    = Setting::where('type', 7)->get();
        $dept           = Setting::where('type', 8)->get();
        
        
        return view('settings.index',[
            'days'          => $day,
            'timeslots'     => $timeslot,
            'rooms'         => $room,
            'semesters'     => $semester,
            'sessions'      => $session,
            'years'         => $year,
            'designations'  => $designation,
            'depts'         => $dept,
        ]);
    }


    /*******************************
    ******* DAY SETTING CRUD *******
    *******************************/

    public function dayAdd(Request $request)
    {
        request()->validate([
            'day_title'         => ['required','unique:settings,title'],
            'display_position'  => ['required'],
        ]);
        Setting::create([
            'type'              => 1,
            'title'             => $request['day_title'],
            'display_order'     => $request['display_position'],
            'is_active'         => 1,
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function dayEdit($id)
    {
        $days   =   Setting::findOrFail($id);

        return $days;
    }

    public function dayUpdate(Request $request)
    {
        request()->validate([
            'day_title'         => ['required','unique:settings,title,'.$request->up_id],
            'display_position'  => ['required'],
        ]);
        $settings = Setting::findOrFail($request->up_id);
        $settings->update([
            'type'              => 1,
            'title'             => $request['day_title'],
            'display_order'     => $request['display_position'],
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function dayDelete($id)
    {
        Setting::findOrFail($id)->delete();
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function dayEnable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 1]);
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function dayDisable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 0]);
        
        return response()->json([
            'status' => 200,
        ]);
    }


    /*******************************
    **** TIMESLOT SETTING CRUD ****
    *******************************/

    public function timeslotAdd(Request $request)
    {
        request()->validate([

            'start_time'            => ['required'],    /*it is only for required validation*/
            'end_time'              => ['required'],    /*it is only for required validation*/
            'timeslot_title'        => ['required','unique:settings,title'],
            'timeslot_position'     => ['required'],
        ]);
        Setting::create([
            'type'                  => 2,
            'title'                 => $request['timeslot_title'],
            'display_order'         => $request['timeslot_position'],
            'is_active'             => 1,
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function timeslotEdit($id)
    {
        $timeslots   =   Setting::findOrFail($id);

        return $timeslots;
    }

    public function timeslotUpdate(Request $request)
    {
        request()->validate([
            'start_time'            => ['required'],    /*it is use only for required validation*/
            'end_time'              => ['required'],    /*it is use only for required validation*/
            'timeslot_title'        => ['required','unique:settings,title,'.$request->up_timeslot_id],
            'timeslot_position'     => ['required'],
        ]);
        $settings = Setting::findOrFail($request->up_timeslot_id);

        $settings->update([
            'type'              => 2,
            'title'             => $request['timeslot_title'],
            'display_order'     => $request['timeslot_position'],
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function timeslotDelete($id)
    {
        Setting::findOrFail($id)->delete();
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function timeslotEnable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 1]);
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function timeslotDisable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 0]);
        
        return response()->json([
            'status' => 200,
        ]);
    }


    /*******************************
    **** ROOM SETTING CRUD ****
    *******************************/

    public function roomAdd(Request $request)
    {
        request()->validate([
            'room_number'           => ['required','integer'],
            'room_position'         => ['required','integer'],
        ]);
        Setting::create([
            'type'                  => 3,
            'title'                 => $request['room_number'],
            'display_order'         => $request['room_position'],
            'is_active'             => 1,
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function roomEdit($id)
    {
        $rooms   =   Setting::findOrFail($id);

        return $rooms;
    }

    public function roomUpdate(Request $request)
    {
        request()->validate([
            'room_number'        => ['required','integer'],
            'room_position'      => ['required','integer'],
        ]);
        $settings = Setting::findOrFail($request->up_room_id);

        $settings->update([
            'type'              => 3,
            'title'             => $request['room_number'],
            'display_order'     => $request['room_position'],
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function roomDelete($id)
    {
        Setting::findOrFail($id)->delete();
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function roomEnable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 1]);
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function roomDisable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 0]);
        
        return response()->json([
            'status' => 200,
        ]);
    }


    /*******************************
    **** SEMESTER SETTING CRUD *****
    *******************************/

    public function semesterAdd(Request $request)
    {
        request()->validate([
            'semester_title'        => ['required','unique:settings,title'],
            'semester_position'     => ['required'],
        ]);
        Setting::create([
            'type'                  => 4,
            'title'                 => $request['semester_title'],
            'display_order'         => $request['semester_position'],
            'is_active'             => 1,
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function semesterEdit($id)
    {
        $semester   =   Setting::findOrFail($id);

        return $semester;
    }

    public function semesterUpdate(Request $request)
    {
        request()->validate([
            'semester_title'        => ['required'],
            'semester_position'     => ['required'],
        ]);
        $settings = Setting::findOrFail($request->up_semester_id);

        $settings->update([
            'type'              => 4,
            'title'             => $request['semester_title'],
            'display_order'     => $request['semester_position'],
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function semesterDelete($id)
    {
        Setting::findOrFail($id)->delete();
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function semesterEnable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 1]);
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function semesterDisable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 0]);
        
        return response()->json([
            'status' => 200,
        ]);
    }

    /*******************************
    **** SESSION SETTING CRUD *****
    *******************************/

    public function sessionAdd(Request $request)
    {
        request()->validate([
            'session_start'        => ['required'],/*it is optional for required validation*/
            'session_end'          => ['required'],/*it is optional for required validation*/
            'session_title'        => ['required','unique:settings,title'],
            'session_position'     => ['required'],
        ]);
        Setting::create([
            'type'                  => 5,
            'title'                 => $request['session_title'],
            'display_order'         => $request['session_position'],
            'is_active'             => 1,
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function sessionEdit($id)
    {
        $session   =   Setting::findOrFail($id);

        return $session;
    }

    public function sessionUpdate(Request $request)
    {
        request()->validate([
            'session_start'        => ['required'],/*it is optional for required validation*/
            'session_end'          => ['required'],/*it is optional for required validation*/
            'session_title'        => ['required','unique:settings,title,'.$request->up_session_id],
            'session_position'     => ['required'],
        ]);
        $settings = Setting::findOrFail($request->up_session_id);

        $settings->update([
            'type'                  => 5,
            'title'                 => $request['session_title'],
            'display_order'         => $request['session_position'],
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function sessionDelete($id)
    {
        Setting::findOrFail($id)->delete();
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function sessionEnable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 1]);
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function sessionDisable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 0]);
        
        return response()->json([
            'status' => 200,
        ]);
    }

    /*******************************
    ****** YEAR SETTING CRUD *******
    *******************************/

    public function yearAdd(Request $request)
    {
        request()->validate([
            'year_title'           => ['required'],
            'year_position'         => ['required'],
        ]);
        Setting::create([
            'type'                  => 6,
            'title'                 => $request['year_title'],
            'display_order'         => $request['year_position'],
            'is_active'             => 1,
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function yearEdit($id)
    {
        $years   =   Setting::findOrFail($id);

        return $years;
    }

    public function yearUpdate(Request $request)
    {
        request()->validate([
            'year_title'        => ['required'],
            'year_position'      => ['required'],
        ]);
        $settings = Setting::findOrFail($request->up_year_id);

        $settings->update([
            'type'              => 6,
            'title'             => $request['year_title'],
            'display_order'     => $request['year_position'],
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function yearDelete($id)
    {
        Setting::findOrFail($id)->delete();
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function yearEnable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 1]);
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function yearDisable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 0]);
        
        return response()->json([
            'status' => 200,
        ]);
    }

    /*************************************
    ****** DESIGNATION SETTING CRUD ******
    **************************************/

    public function designationAdd(Request $request)
    {
        request()->validate([
            'designation_title'           => ['required'],
            'designation_position'         => ['required'],
        ]);
        Setting::create([
            'type'                  => 7,
            'title'                 => $request['designation_title'],
            'display_order'         => $request['designation_position'],
            'is_active'             => 1,
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function designationEdit($id)
    {
        $designations   =   Setting::findOrFail($id);

        return $designations;
    }

    public function designationUpdate(Request $request)
    {
        request()->validate([
            'designation_title'         => ['required'],
            'designation_position'      => ['required'],
        ]);
        $settings = Setting::findOrFail($request->up_designation_id);

        $settings->update([
            'type'              => 7,
            'title'             => $request['designation_title'],
            'display_order'     => $request['designation_position'],
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function designationDelete($id)
    {
        Setting::findOrFail($id)->delete();
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function designationEnable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 1]);
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function designationDisable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 0]);
        
        return response()->json([
            'status' => 200,
        ]);
    }



    /*************************************
    ******* DEPARTMENT SETTING CRUD ******
    **************************************/

    public function departmentAdd(Request $request)
    {
        request()->validate([
            'department_title'           => ['required'],
            'department_position'         => ['required'],
        ]);
        Setting::create([
            'type'                  => 8,
            'title'                 => $request['department_title'],
            'display_order'         => $request['department_position'],
            'is_active'             => 1,
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function departmentEdit($id)
    {
        $departments   =   Setting::findOrFail($id);

        return $departments;
    }

    public function departmentUpdate(Request $request)
    {
        request()->validate([
            'department_title'         => ['required'],
            'department_position'      => ['required'],
        ]);
        $settings = Setting::findOrFail($request->up_department_id);

        $settings->update([
            'type'              => 8,
            'title'             => $request['department_title'],
            'display_order'     => $request['department_position'],
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function departmentDelete($id)
    {
        Setting::findOrFail($id)->delete();
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function departmentEnable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 1]);
        
        return response()->json([
            'status' => 200,
        ]);
    }

    public function departmentDisable($id)
    {
        Setting::findOrFail($id)->update(['is_active' => 0]);
        
        return response()->json([
            'status' => 200,
        ]);
    }





}