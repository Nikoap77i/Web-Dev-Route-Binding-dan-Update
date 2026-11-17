<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    /** @use HasFactory<\Database\Factories\LecturerFactory> */
    use HasFactory;
    protected $fillable =[
        "name",
        "age",
        "date_joined",
        "specialization",
        "is_active"
    ];
}

