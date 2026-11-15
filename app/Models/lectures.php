<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lectures extends Model
{
    /** @use HasFactory<\Database\Factories\LecturesFactory> */
    use HasFactory;

    public function Courses()
    {
        return $this->hasMany(course::class);
    }
}