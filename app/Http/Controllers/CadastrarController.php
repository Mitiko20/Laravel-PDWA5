<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Celular;
// use App\Models\Objeto;

class CadastrarController extends Controller
{
    //Regra de Negocio: validar e persistir dados no banco
    public function salvar(Request $request){
        // $request->validate([
        //     "linha" => "required|min:3|max:50",
        //     "data" => "required|date",
        //     "booleano" => "required|boolean",
        //     "decimal" => "required|decimal:2",
        //     "inteiro" => "required|integer"
        // ],
        // [
        //     "linharequired" => "O campo 'Texto Curto' deve ser preenchido",
        //     "linha.min" => "O campo 'Texto Curto' deve ter no mínimo 3 caracteres",
        //     "linha.max" => "O campo 'Texto Curto' deve ter no máximo 50 caracteres",
        //     "data.required" => "O campo 'data' deve ser preenchido",
        //     "data.date" => "A data deve ser válida",
        //     "booleano.required" => "O campo 'Booleano' deve uma seleção",
        //     "booleano.boolean" => "O valor deve ser 'booleano'",
        //     "decimal.required" => "O campo 'Decimal' deve ser preenchido",
        //     "decimal.decimal" => "O campo 'Decimal' deve ser um número com duas casas decimais",
        //     "inteiro.required" => "O campo 'Inteiro' deve ser preenchido",
        //     "inteiro.integer" => "O campo 'Inteiro' deve ser um número inteiro"
        // ]);

        // $objeto = new Objeto();
        // $objeto->fill($request->all());
        // $objeto->save();

        $request->validate([
            "marca" => "required|min:3|max:50",
            "modelo" => "required|min:3|max:50",
            "cor" => "required|min:3|max:20",
            "memoriaRAM" => "required|integer",
            "sistema" => "required|min:3|max:50"
        ],
        [
            "marca.required" => "O campo 'Marca' deve ser preenchido",
            "marca.min" => "O campo 'Marca' deve ter no mínimo 3 caracteres",
            "marca.max" => "O campo 'Marca' deve ter no máximo 50 caracteres",
            "modelo.required" => "O campo 'Modelo' deve ser preenchido",
            "modelo.min" => "O campo 'Modelo' deve ter no mínimo 3 caracteres",
            "modelo.max" => "O campo 'Modelo' deve ter no máximo 50 caracteres",
            "cor.required" => "O campo 'Cor' deve ser preenchido",
            "cor.min" => "O campo 'Cor' deve ter no mínimo 3 caracteres",
            "cor.max" => "O campo 'Cor' deve ter no máximo 20 caracteres",
            "memoriaRAM.required" => "O campo 'Memória RAM' deve ser preenchido",
            "memoriaRAM.integer" => "O campo 'Memória RAM' deve ser um número inteiro",
            "sistema.required" => "O campo 'Sistema' deve ser preenchido",
            "sistema.min" => "O campo 'Sistema' deve ter no mínimo 3 caracteres",
            "sistema.max" => "O campo 'Sistema' deve ter no máximo 50 caracteres",
        ]);

        $celular = new Celular();
        $celular->fill($request->all());
        $celular->save();

        // dd($request);
        return view('cadastrosalvo');
    }
}
