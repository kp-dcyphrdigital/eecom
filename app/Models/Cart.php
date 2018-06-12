<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'products'];

    public function getLineDetails()
    {
        $itemsInCart = collect( array_count_values( explode( ',', $this->products ) ) );
        $products = Product::whereIn('slug', $itemsInCart->keys()->all() )->where('stock', '>', 0)->get();
        $productsWithQuantity = $products->map(function ($product) use ($itemsInCart) {
            return [
                'name' => $product->name,
                'quantity' => $itemsInCart[$product->slug],
                'price' => $product->price,
                'subtotal' => $itemsInCart[$product->slug] * $product->price,
            ];
        });
        return $productsWithQuantity;
    }

}
