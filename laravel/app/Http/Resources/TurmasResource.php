<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TurmasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
//            'alunos' => new AlunosResource($this->alunos),
            'code' => 200,
            'id' => $this->id,
            'level' => $this->name,
        ];
    }
}
