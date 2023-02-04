<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RezervacijaResource extends JsonResource
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
            'Ukupna cena rezervacije -> ' => $this->resource->iznos,
            'Broj sedista -> ' => $this->resource->sediste,
            'Nacin placanja -> ' => $this->resource->nacinPlacanja,
            'Gledalac -> ' => new GledalacResource($this->resource->gledalac),
            'Film -> ' => new FilmResource($this->resource->film)

        ];
    }
}
