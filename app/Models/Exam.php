<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = 'master_exams';

    protected $fillable = [
        'exam_code',
        'class_id',
        'subject_code',
        'subject',
        'type',
        'maximum_mark',
        'start_time',
        'end_time',
        'exam_date',
    ];

}
