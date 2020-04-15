<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
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
          'discount' => $this->discount,
          'href' => [
            'link' => route('products.show', $this->id),
          ]
        ];
    }
}
