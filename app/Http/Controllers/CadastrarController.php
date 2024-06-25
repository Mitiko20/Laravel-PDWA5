<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarController extends Controller
{
    //Regra de Negocio: validar e persistir dados no banco
    public function salvar(Request $request){
        dd($request);
    }
}
