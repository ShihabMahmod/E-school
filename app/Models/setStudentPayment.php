<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setStudentPayment extends Model
{
    use HasFactory;
    protected $table = "set_student_payments";
    protected $fillable = [
        'class',
        'class_payment',
        'daycare_payment',
    ];
}
