<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    public function lecturers()
    {
        return $this->belongsTo(lectures::class);
    }

    public function course_user()
    {
        return $this->belongsTo(course_user::class);
    }
}