<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\post;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'code',
    ];

    public function posts()
    {
        return $this->hasMany(post::class);
    }
}

?>
