<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'body', 'country', 'city'];

    public function post_images() {
        return $this->hasMany('App\Models\PostImage');
    }
}