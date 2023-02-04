<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GledalacResource extends JsonResource
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
            'ID -> ' => $this->resource->id,
            'Ime prezime gledaoca -> ' => $this->resource->imePrezime,
            'Broj telefona gledaoca-> ' => $this->resource->brojTelefona,
            'Broj godina gledaoca -> ' => $this->resource->godine
        ];
    }
}
