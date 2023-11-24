<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Requests\Endereco\SalvarRequest;
use App\Models\Endereco;

class EnderecoController extends Controller{
    
    public function index(){
        $enderecos = Endereco::all();
        return view('lista',[
            'enderecos'=>$enderecos
        ]);
    }

    public function adicionar(){
        return view('busca');
    }

    public function buscar(Request $request){
        
        $cep = $request->input('cep');
        $response = Http::get("viacep.com.br/ws/$cep/json/")->json();

        return view('adicionar',
                [
                    "cep"        => $request['cep'],
                    "logradouro" => $response['logradouro'],
                    "bairro"     => $response['bairro'],
                    "localidade" => $response['localidade'],
                    "uf"         => $response['uf']
                ]
            );
    }
    public function salvar(SalvarRequest $request){
            $endereco = Endereco::where('cep', $request->input('cep'))->first();
            if(!$endereco){
            $end = Endereco::create(
                [
                    "cep"        => $request->input('cep'),
                    "logradouro" => $request->input('logradouro'),
                    "bairro"     => $request->input('bairro'),
                    "numero"     => $request->input('numero'),
                    "cidade"     => $request->input('cidade'),
                    "estado"     => $request->input('estado'),
                ]
            );
            return redirect('/')->withSucesso('Endereço Salvo com Sucesso');
            }
            return redirect('/')->witherro('Endereço ja existe');
    }

}
