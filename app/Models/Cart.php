<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['cart_id', 'user_id', 'sku', 'quantity'];
}
