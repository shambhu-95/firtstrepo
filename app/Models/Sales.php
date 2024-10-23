<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable=['cust_id','inventory_id','sales_date','loc_id','quantity','total_amount'];
    use HasFactory;
}
