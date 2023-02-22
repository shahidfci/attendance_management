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

    public function settingDesig()
    {
        return $this->belongsTo(Setting::class, 'designation', 'display_order')->where('type', 7);
    }

    public function settingDept()
    {
        return $this->belongsTo(Setting::class, 'dept', 'display_order')->where('type', 8);
    }
}
