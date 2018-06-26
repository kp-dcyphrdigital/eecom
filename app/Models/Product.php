<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    /**
     * A product can be in many categories
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    /**
     * A product has many variants
     */
    public function variants()
    {
        return $this->hasMany('App\Models\Variant');
    }

    /**
     * Products can be filtered by category/categories
     */
    public function byCategory($categories)
    {
    	$categories = explode(',', $categories);
		return $this->whereHas('categories', function ($query) use ($categories) {
		    $query->whereIn('id', $categories);
		});
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
