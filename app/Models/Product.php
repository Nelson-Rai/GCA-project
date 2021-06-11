<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_desc',
        'price',
        'category_id',
        'image_path',
    ];

    // Defining relationship of product and category
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
