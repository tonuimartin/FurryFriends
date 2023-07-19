<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onlinepayment extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'user_id',
        'checkout_id',
        'amount',
        'phone_number',
        'mpesa_receipt_number',
        'transaction_data',
        'status'
        
    ];
}
