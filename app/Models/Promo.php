<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;
    protected $table = "promos";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'discount'
    ];
}
