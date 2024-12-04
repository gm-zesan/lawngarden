<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'user_id',
        'rating',
        'review',
        'status',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }


    public function user()
    {
        return $this->belongsTo(Customer::class);
    }
}
