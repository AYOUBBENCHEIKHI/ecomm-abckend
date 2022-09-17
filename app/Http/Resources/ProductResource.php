<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id' => $this->id,
            'title'=>$this->title,
            'quantity'=>$this->quantity,
            'purchasePrice'=>$this->purchasePrice,
            'sellingPrice'=>$this->sellingPrice,
            'tax'=>$this->tax,
            'category_id'=>$this->category_id,
        ];
    }
}
