<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Variável que define quais campos poderão ser incluidos em massa.
     * Definida para evitar a "Mass Assignmant Excption" (Ocorre quando se tenta inserir registros em massa)
     *
     * O Mass Assigmant é feito quando se cria um registro atravéz do metodo "create" passando um array com
     * os valores ao invés de setar no objeto e dar um "save"
     * 
     * @var array
     */
    protected $fillable = [
        'title',
        'content'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'posts_tags');
    }
}
