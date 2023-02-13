<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'employe_id',
        'email',
        'password',
        'mobile',
        'designation',
        'gender',
        'dept',
        'birth_date',
        'address',
        'is_active',
        'image'
    ];
}
