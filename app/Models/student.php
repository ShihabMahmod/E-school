<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Aapp\Models\User;

class student extends Model
{
    use HasFactory;
    protected $table = "studets";
    protected $fillable = [
        'roll',
        'class',
        'DOB',
        'sex',
        'address',
        'phone',
        'guardian_name',
        'join_class',
        'group',
        'image'
    ];

}
