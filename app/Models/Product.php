<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'name',
        'category_id',
        'image',
        'slug',
        'thumbnail',
        'short_text',
        'price',
        'content',
        'size',
        'color',
        'count',
        'status',
    ];
    public function category(){
        return $this->HasOne(Category::class,"id","category_id") ;
    }
    public function sluggable(): array
    {

        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
