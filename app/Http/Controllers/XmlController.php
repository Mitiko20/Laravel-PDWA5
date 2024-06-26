<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Celular;
// use App\Models\Objeto;

class XmlController extends Controller
{
    //Pegar todos os dados e gerar um xml
    public function gerarXML(){
        //buscar os registros no banco
        $dados = Celular::all(); // equivale SELECT * FROM table
        // print_r($dados);

        //retornar uma view com os dados
        return response()->view('data-xml', ['registros' => $dados])->header('Content-Type', 'application/xml');
    }
}
