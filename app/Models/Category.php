<?php

namespace App\Models;

use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use NodeTrait;
	
    /**
     * A category can have many products
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

	/**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'slug';
	}
}
