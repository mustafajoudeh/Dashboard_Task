<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_user extends Model
{
    /** @use HasFactory<\Database\Factories\CourseUserFactory> */
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function courses()
    {
        return $this->hasMany(course::class);
    }
}