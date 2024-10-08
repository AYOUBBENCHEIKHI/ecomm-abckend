<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //title,quantity,purchasePrice,sellingPrice,tax
    protected $fillable = [
        'title',
        'quantity',
        'purchasePrice',
        'price',
        'tax',
        'img_url',
        'category_id'
    ];
}