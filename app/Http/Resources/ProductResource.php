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
            'price'=>$this->price,
            'tax'=>$this->tax,
            'img_url'=>$this->img_url,
            'category_id'=>$this->category_id,
        ];
    }
}
