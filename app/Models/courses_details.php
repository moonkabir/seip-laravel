<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses_details extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prerequisite',
        'benefits',
        'jobPlacement',
    ];
}
