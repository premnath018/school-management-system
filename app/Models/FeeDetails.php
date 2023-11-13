<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'total_amount',
        'paid_amount',
        'status',
    ];
}
