<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;
    protected $fillable = ['holiday_name', 'leave_type', 'fromdate', 'todate', 'number_of_days'];
}
