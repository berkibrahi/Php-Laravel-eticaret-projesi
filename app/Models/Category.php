<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
   use Sluggable;
    use HasFactory;
    protected $fillable = [
        'image',
        'thumbnail',
        'name',
        'slug',
        'content',
        'cat_ust',
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
