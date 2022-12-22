<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentAttendance extends Model
{
    use HasFactory;
    protected $table = "student_attendances";
    protected $fillable = [
        'student_id',
        'attendance',
        'lc'
    ];
    public $timestamps = true;

}
