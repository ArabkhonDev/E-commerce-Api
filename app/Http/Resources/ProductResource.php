<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'name'=> $this->getTranslations('name'),
            'price'=> $this->price,
            'desc'=> $this->getTranslations('desc'),
            'invertory'=> StockResource::collection($this->stocks),
            'category'=> new CategoryResource($this->category),
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at,
        ];
    }
}
