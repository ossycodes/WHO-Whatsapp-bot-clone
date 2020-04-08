<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CovidcasesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'country_r' => $this->country,
            'country_code' => $this->country_code,
            'confirmed_r' => $this->confirmed,
            'deaths_r' => $this->deaths,
            'recovered_r' => $this->recovered
        ];
    }
}
