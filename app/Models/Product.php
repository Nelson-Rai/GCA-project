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
        'user_id',
    ];

    // Defining relationship of product and category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function OrderItem(){
        return $this->hasMany(OrderItem::class);
    }

    public function scopeSearch($query, array $terms){ 
        $search = $terms['search'];
        $category = $terms['category'];
        if($search){
            $query->where(function($query) use ($search){
                return $query->where('product_name', 'like', '%'. $search .'%')
                    ->orWhere('product_desc', 'like', '%'. $search .'%');
            
        } );      
        }

        $query->when($category, function($query, $category){
            return $query->whereCategoryId($category);
        });

        return $query;

    }

}
