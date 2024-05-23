<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class CalculationResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'calculation' => $this->calculation,
            'result' => $this->result,
        ];
    }
}
