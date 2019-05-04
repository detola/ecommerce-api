<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ProductResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'totalPrice' => round($this->price - (($this->discount/100) * $this->price), 2),
            'stock' => $this->stock == 0 ? 'Out of stock' : $this->stock,
            'links' => route('products.show', $this->id),
        ];
    }
}
