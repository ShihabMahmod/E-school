<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacherAttendance extends Model
{
    use HasFactory;
    protected $table = "teacher_attendance";
    protected $fillable = [
        'teacher_id',
        'attendance',
        'lc',
        'is_approved'
    ];
}
