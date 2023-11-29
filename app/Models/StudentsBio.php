<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsBio extends Model
{
    use HasFactory;
    protected $fillable = [
        'batch',
        'date_of_admission',
        'admission_number',
        'name',
        'gender',
        'dob',
        'age',
        'religion',
        'community',
        'caste',
        'nationality',
        'mother_tongue',
        'blood_group',
        'enrollment_number',
        'contact_number',
        'father_name',
        'mother_name',
        'email',
        'permanent_address',
        'present_address',
        'father_occupation',
        'mother_occupation',
        'place_of_work',
        'father_income',
        'mother_income',
        'emis_number',
        'class_id',
        'fees',
        'extra_fees',
        'extra_paid_fees',
    ];

    protected $dates = [
        'date_of_admission',
        'dob',
    ];

    public $timestamps = true;
}
