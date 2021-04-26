<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserMasterResource extends JsonResource
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
            'user_type_id' => $this->user_type_id,
            'user_display_name' => $this->user_display_name,
            'user_name' => $this->user_name,
            'contact_number' => $this->contact_number,
            'user_type_id' => $this->user_type_id,

            'email_id' => $this->email_id,
        ];
    }
}
