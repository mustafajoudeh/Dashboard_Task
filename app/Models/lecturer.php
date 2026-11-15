<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    /** @use HasFactory<\Database\Factories\LecturerFactory> */
    use HasFactory;

    public function User()
    {
        return $this->hasOne(User::class);
    }

    protected $fillable = [
        'user_id',
        'employee_number',
        'department',
        'office_room',
        'photo',
        'IsActivated',
    ];
}