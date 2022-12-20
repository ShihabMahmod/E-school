<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setPayment extends Model
{
    use HasFactory;
    protected $table = "set_payments";
    protected $fillable = [
        'employee_name',
        'employee_id',
        'designation',
        'phone',
        'amount'
    ];
    
}
