<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable=['bikecar_id','maintenance_date','issue_reported','repair_cost','locat_id'];
    use HasFactory;
}
