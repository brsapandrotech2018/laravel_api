<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerAddResource extends JsonResource
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

        return[
            'id' => $this->id,
            'customer_id' => $this->customer_id,
            'address_type_id' => $this->address_type_id,
            'country' => $this->country,
            'state' => $this->state,
            'city' => $this->city,

            'locality' => $this->locality,
            'street' => $this->street,
        ];
        
        
    }
}
