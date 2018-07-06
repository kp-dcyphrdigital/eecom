<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
     /**
     * Get the post that owns the comment.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
