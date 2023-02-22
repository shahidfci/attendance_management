<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_routine extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'semester_id',
        'day_id',
        'teacher_id',
        'time_slot_id',
        'program_id',
        'year_id',
        'aca_session',
        'is_active'
    ];
    
    public function teacherTbl()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function courseTbl()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function settingDay()
    {
        return $this->belongsTo(Setting::class, 'day_id', 'display_order')->where('type', 1);
    }

    public function settingDept()
    {
        return $this->belongsTo(Setting::class, 'program_id', 'display_order')->where('type', 8);
    }

    public function settingSem()
    {
        return $this->belongsTo(Setting::class, 'semester_id', 'display_order')->where('type', 4);
    }

    public function settingYear()
    {
        return $this->belongsTo(Setting::class, 'year_id', 'display_order')->where('type', 6);
    }

    public function settingSession()
    {
        return $this->belongsTo(Setting::class, 'aca_session', 'display_order')->where('type', 5);
    }

    public function settingTimeslot()
    {
        return $this->belongsTo(Setting::class, 'time_slot_id', 'display_order')->where('type', 2);
    }

}