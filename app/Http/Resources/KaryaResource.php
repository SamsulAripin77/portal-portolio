<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KaryaResource extends JsonResource
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
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'tanggal' => $this->tanggal,
            'bukti' => $this->bukti,
            'tautan' => $this->tautan,
            'status' => $this->status,
            'komentar' => $this->komentar,
        ];

       
    }

    public function with($request){
        return ['message' => 'sukses'];
    }

}
