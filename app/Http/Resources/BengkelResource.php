<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BengkelResource extends JsonResource
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
            'id'=>$this->id,
            'nama'=>$this->nama,
            'kategori'=>$this->nama,
            'jadwal' => $this->jadwal,
            'keterangan' => $this->keterangan,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'image'=>env('ASSET_URL')."/uploads/".$this->image,        ];
    }
}