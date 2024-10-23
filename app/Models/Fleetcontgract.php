<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fleetcontgract extends Model
{
    protected $fillable=['rentbyhour','rentstartdate','rentenddate','vehicle','sales_person','attachment','firstpayment','fleet_color','fleet_brand','recurring_cost'];

    use HasFactory;
}
