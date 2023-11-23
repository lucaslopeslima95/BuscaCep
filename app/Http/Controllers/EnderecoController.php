<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Requests\Endereco\SalvarRequest;

class EnderecoController extends Controller{
    
    public function index(){
        return view('busca');
    }

    public function buscar(Request $request){
        
        $cep = $request->input('cep');
        $response = Http::get("viacep.com.br/ws/$cep/json/")->json();

        return view('adicionar',
                [
                    "cep" => $request['cep'],
                    "logradouro" => $response['logradouro'],
                    "bairro" => $response['bairro'],
                    "localidade" => $response['localidade'],
                    "uf" => $response['uf']
                ]
            );
    }
    public function salvar(SalvarRequest $request){
            dd($request->all());
    }

}
