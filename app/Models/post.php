<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class post extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'title', 'body', 'large_image', 'small_image', 'views', 'shares', 'category_id', 'user_id',
    ];

    public function comments()
    {
        return $this->hasMany(comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
