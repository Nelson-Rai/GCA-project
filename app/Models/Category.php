<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\sluggable;

class Category extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'Parent_id',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
            ];
    }
}
