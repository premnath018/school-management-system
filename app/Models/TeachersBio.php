<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachersBio extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'teacher_id',
        'dob',
        'permanent_address',
        'gender',
        'date_of_joining',
        'age',
        'contact_number',
        'email',
        'emergency_contact_number',
        'previous_work_experience',
        'total_experience',
        'subject',
        'salary',
    ];

    protected $dates = [
        'dob' => 'date',
        'date_of_joining' => 'date',
    ];

    public $timestamps = true;
}
