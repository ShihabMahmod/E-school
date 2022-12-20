<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = "Subjects";
    protected $fillable = [
        'name',
        'class_name',
        'assigning_teacher_name',
        'class_time',
        'is_group_subject'
    ];
}
