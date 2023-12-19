<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $table = "transactions";
    protected $primaryKey = "id";
    protected $fillable = [
        'user_id',
        'address',
        'ship_date',
        'arrival_date',
        'payment_date',
        'payment_method',
        'tracking_number',
        'status',
        'total_amount',
        'shipment_id'
    ];
}
