<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['first_name','last_name','email','number','Address','date_of_birth'];
    use HasFactory;
}
