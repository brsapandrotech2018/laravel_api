<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'customer_id' => $this->customer_id,
            'mobile_number' => $this->mobile_number,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'user_type_id' => $this->user_type_id,

            'email_id' => $this->email_id,
        ];
    }
}
