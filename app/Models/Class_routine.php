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
}
