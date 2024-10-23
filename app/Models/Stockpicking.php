<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockpicking extends Model
{
    protected $fillable=['reference','from','to','contact','Date','document'];
    use HasFactory;
}
