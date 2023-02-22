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
            'day_title'         => ['required'],
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
            'timeslot_title'        => ['required'],
            'display_position'      => ['required'],
        ]);
        $settings = Setting::findOrFail($request->up_timeslot_id);

        $settings->update([
            'type'              => 2,
            'title'             => $request['timeslot_title'],
            'display_order'     => $request['display_position'],
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


}