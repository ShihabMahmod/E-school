<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $table = "admins";
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    protected $hidden = [
        'password'
    ];
}
