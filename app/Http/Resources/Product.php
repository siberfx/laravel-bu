<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'sku' => $this->sku,
            'category' => $this->category,
            'sub_categories' => $this->sub_categories,
            'brand' => $this->brand,
            'stock_amount' => $this->stock_amount,
            'stock_type' => $this->stock_type,
            'net_quantity' => $this->net_quantity,
            'quantity_type' => $this->quantity_type,
            'image' => $this->image,
            'active' => $this->active,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
