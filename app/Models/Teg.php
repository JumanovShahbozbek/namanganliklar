<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teg extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function posts()
    {
        return $this -> belongsToMany(Post::class);
    }
}
