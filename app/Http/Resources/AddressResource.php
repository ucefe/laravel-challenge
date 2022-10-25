<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'street_address' => $this->street_name . ' ' . $this->street_number, // street_address + street_number
            "street_type" => $this->street_type,
            "zip_code" => $this->zip_code,
            "city" => $this->city,
            "state" => $this->state
        ];
    }
}