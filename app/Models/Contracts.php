<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    protected $fillable=['name','reference','type','contract_start_date','contract_expiration_date','responsible','included_services'];
    use HasFactory;
}
