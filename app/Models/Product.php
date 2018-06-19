<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * Get the product's price in dollars
     *
     * @param  integer  $value
     * @return float
     */
    public function getPriceAttribute($value)
    {
        return $value / 100;
    }

    /**
     * Get the product's RRP in dollars
     *
     * @param  integer  $value
     * @return float
     */
    public function getRrpAttribute($value)
    {
        return $value / 100;
    }

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
