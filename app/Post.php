<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Variável que define quais campos poderão ser incluidos em massa.
     * Definida para evitar a "Mass Assignmant Excption" (Ocorre quando se tenta inserir registros em massa)
     * @var array
     */
    protected $fillable = [
        'title',
        'content'
    ];
}
