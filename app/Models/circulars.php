<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class circulars extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'published_at'
    ];

    protected $dates = [
        'published_at'
    ];
}
