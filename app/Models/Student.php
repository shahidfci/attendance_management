<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'roll_no',
        'reg_no',
        'gender',
        'mobile',
        'birth_date',
        'nid',
        'address',
        'is_active'
    ];
}
