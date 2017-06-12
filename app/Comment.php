<?php

namespace Sabixao;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'comment',
        'name',
        'email'
    ];

    public function post()
    {
        return $this->belongsTo('Sabixao\Post');
    }
}
