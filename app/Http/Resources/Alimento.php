<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Alimento extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'tipo' => $this->tipo,
            'preparo' => $this->preparo,
            'grupo_id' => $this->grupo_id,
            'calorias' => $this->calorias,
            'proteinas' => $this->proteinas,
            'carboidratos' => $this->carboidratos,
            'gorduras' => $this->gorduras,
            'sodio' => $this->sodio,
            'porcao' => $this->porcao,
            'medida' => $this->medida,
            'fator_conversor' => $this->fator_conversor,
            'fonte_id' => $this->fonte_id,
        ];
    }
}
