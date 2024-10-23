<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable=['model','licence_plate','tag','category','driver','assignment_date','order_date','chasis_number','fleet_manager','location'];
    use HasFactory;
}
