<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warehouses extends Model
{
    protected $fillable=['warehouse','location','address','company'];
    use HasFactory;
}

