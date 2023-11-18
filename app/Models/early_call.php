<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class early_call extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','user_id', 'class_id', 'date', 'time', 'reason'
    ];
}
