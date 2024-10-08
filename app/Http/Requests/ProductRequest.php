<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    //title,quantity,purchasePrice,sellingPrice,tax
    public function rules()
    {
        return [
            'title'=>'required|max:100',
            'quantity'=>'required',
            'purchasePrice'=>'required',
            'price'=>'required',
            'tax'=>'required',
            'img_url'=>'required',
            'category_id'=>'required',
        ];
    }
}
