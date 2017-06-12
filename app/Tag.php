<?php

namespace Sabixao;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->belongsToMany('Sabixao\Post', 'posts_tags');
    }
}
