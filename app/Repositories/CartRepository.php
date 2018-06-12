<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\Product;

class CartRepository {

    public function getLineDetailsById($id)
    {
        $itemsInCart = collect( array_count_values( explode( ',', Cart::find($id)->products ) ) );
        $products = Product::whereIn('slug', $itemsInCart->keys()->all() )->where('stock', '>', 0)->get();
        return $products->map(function ($product) use ($itemsInCart) {
            return [
                'name' => $product->name,
                'quantity' => $itemsInCart[$product->slug],
                'price' => $product->price,
                'subtotal' => $itemsInCart[$product->slug] * $product->price,
            ];
        });
    }

    public function getCartTotalbyId($id)
    {
    	return $this->getLineDetailsById($id)->sum('subtotal');
    }

}

