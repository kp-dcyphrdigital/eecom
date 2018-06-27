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
     * A hero product has many variants
     */
    public function heroVariants()
    {
        return $this->hasMany('App\Models\Variant');
    }

    /**
     * A product has many variants
     */
    public function variants()
    {
        return $this->hasMany('App\Models\Variant', 'style', 'style');
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

}
