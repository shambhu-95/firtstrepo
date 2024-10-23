<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable=['item_name','type','stock_level','purchase_price','selling_price','loc_id'];
    use HasFactory;
}
