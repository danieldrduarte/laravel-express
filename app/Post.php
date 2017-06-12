<?php

namespace Sabixao;

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
        return $this->hasMany('Sabixao\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('Sabixao\Tag', 'posts_tags');
    }

    /**
     * Criando um atributo dinâmico, no nome o "get" e o "Attribute" são obrigatórios no nome do método,
     * nesse caso na view será chamado: $post->tagList OU $post->tag_list OU $post->TagList , etc
     * @return mixed
     */
    public function getTagListAttribute()
    {
        $arTags  = $this->tags()->lists('name')->all();
        $strTags = implode(',', $arTags);
        return $strTags;

    }
}
