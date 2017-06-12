<?php

namespace Sabixao\Http\Controllers;

use Sabixao\Http\Requests;

class TestController extends Controller
{
    /**
     * Action que retorna uma mensagem para o nome informado
     * @param $nome nome da pessoa
     * @return String
     */
    public function index($nome)
    {
        //return view("test/index", ["nome" => $nome]);
        return view("test.index", ["nome" => $nome]);
    }

    /**
     * Retorna uma lista fixa de anotações
     * @return array
     */
    public function notas()
    {
        $notas = [
            'Anotação 1',
            'Anotação 2',
            'Anotação 3',
            'Anotação 4',
            'Anotação 5'
        ];

        //return view("test/notas", compact('notas'));
        return view("test.notas", compact('notas'));
    }
}
