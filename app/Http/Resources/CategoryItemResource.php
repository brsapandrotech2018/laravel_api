<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'category_id' => $this->category_id,
            'unit_id' => $this->unit_id,
            'item_name' => $this->item_name,
            'unit_price' => $this->unit_price,
            'description' => $this->description
        ];
    }
}
