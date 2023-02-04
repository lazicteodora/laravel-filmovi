<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
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
            'Naziv filma -> ' => $this->resource->naziv,
            'Zanr filma -> ' => $this->resource->zanr,
            'Broj sale u kojoj se odrzava projekcija -> ' => $this->resource->brojSale,
            'Nacin prevodjenja -> '=> $this->resource->nacinPrevodjenja,
        ];
    }
}
