<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfracoesController extends Controller
{
    public function index(Request $request){

              $infracoes = array(
            [
                'tipo' => 'Internet',
                'tipo_produto' => 'Formulas Infantis'      
            ],
            [
                'tipo' => 'Presencial',
                'tipo_produto' => 'Formulas Infantis'      
            ]

        );

    
    return view('infracoes.index', ['infracoes' => $infracoes]);
}
}