<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use \Spatie\Tags\HasTags, HasTags;

    protected $fillable = [
        'slug',
        'title',
        'body',
    ];
}
