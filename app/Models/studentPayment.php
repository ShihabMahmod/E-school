<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentPayment extends Model
{
    use HasFactory;
    protected $table ="student_payments";
    protected $fillable = [
        'student_id',
        'payment_amount',
        'pay_amount',
        'payment_status'
    ];
}
