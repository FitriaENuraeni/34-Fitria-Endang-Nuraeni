<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cover',
        'title',
        'summary',
        'author_id',
        'year',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function getSumAttribute()
    {
        return $this->review->sum(function ($review) {
            return $review->rating;
        });
    }

    public function getCountAttribute()
    {
        return $this->review->count(function ($review) {
            return $review->rating;
        });
    }
}
