<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
