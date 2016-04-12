<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class TestController extends Controller
{
    public function index($nome)
    {
        //return "Olá $nome";
        //return view("test/index");
        return view("test.index", ["nome" => $nome]);
    }

    public function notas()
    {
        $notas = [
            'Anotação 1',
            'Anotação 2',
            'Anotação 3',
            'Anotação 4',
            'Anotação 5'
        ];

        return view("test.notas", compact('notas'));
    }
}
