<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class EnderecoController extends Controller{
    
    public function index(){
        return view('busca');
    }

    public function buscar(Request $request){
        $cep = $request->input('cep');
        $response = Http::get("viacep.com.br/ws/$cep/json/")->json();
        dd($response);
    }

}
