<?php

namespace App\Models\teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class teacher extends Model
{
    use HasFactory;

    protected $table = "teachers";
    protected $fillable = [
        'teacher_id',
        'designation',
        'DOB',
        'sex',
        'phone',
        'address',
        'join_date',
        'background',
        'image'
    ];
    public function techersList()
    {
        return $this->hasOne(User::class);
    }
}
