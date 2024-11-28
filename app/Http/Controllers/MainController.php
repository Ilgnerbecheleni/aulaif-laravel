<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
    public function index(){
        return view("home", ["nome"=> "Ilgner", "idade"=>32]);

        //teste de conexão com BD

        try{
            DB::connection()->getPdo();
            echo"conexão oK";

        }catch(Exception $e){
            echo"conexão oK";
        }
    }

    public function cadastro(){
        return view("cadastro");
    }

    public function cadastroSubmit(Request $request){
       
        $request->validate([
            "nome" => "required",
            "idade" => "required|numeric|min:18|max:100",
        ], [
            "nome.required" => "O campo Nome é obrigatório.",
            "idade.numeric" => "O campo Idade deve ser um número.",
            "idade.min" => "O campo Idade deve ser maior que 18 anos",
            "idade.max" => "O campo Idade deve ser menor que 100 anos",
        ]);
    
        $dados = [
            "nome" => $request->nome,
            "idade" => $request->idade,
        ];
        
        return view("home", $dados);
    }
}
