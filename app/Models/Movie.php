<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Movie extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = [
        'title', 'slug', 'overview', 'popularity', 'poster_path', 'backdrop_path', 'release_date', 'category_id'
    ];

     protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('overview', 'release_date', '%' . request('search') . '%');
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}