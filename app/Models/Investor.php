<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    protected $fillable=['investor_name','phone','email','investment','Address','date_of_invest'];
    use HasFactory;
}
