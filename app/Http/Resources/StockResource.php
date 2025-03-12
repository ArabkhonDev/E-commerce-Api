<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{

    public function toArray(Request $request)
    {
        $result = [
            'quantity' => $this->quantity,
        ];

        return  $this->getAttributes($result);

        // return $result;
    }

    public function getAttributes( array $result){
        $attributes = json_decode($this->attributes);
        foreach ($attributes as $stockAttribute) {
            /* todo cashe it */
            $attribute = Attribute::find($stockAttribute->attribute_id);
            $value = Value::find($stockAttribute->value_id);
            $result[$attribute->name] = $value->getTranslations('name');
        }
        return $result;
    }
}
