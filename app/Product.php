<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * A product can be in many categories
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    /**
     * Products can be filtered by category/categories
     */
    public function byCategory($categories)
    {
    	$categories = explode(',', $categories);
		return $this->whereHas('categories', function ($query) use ($categories) {
		    $query->whereIn('id', $categories);
		})->get();
    }

	/**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'name';
	}  

}
