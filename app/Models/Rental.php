<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable=['customer','pickup_loc','drop_loc','bike_id','rental_start','rental_end','total_amount','status'];
    use HasFactory;
}
