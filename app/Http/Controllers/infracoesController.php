<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infracoesController extends Controller
{
    public function listarInfracoes(){
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

    $html = "<ul>";
    foreach ($infracoes as $key => $infracao) {
        $html .= "<li>" .$infracao['tipo']. "</li>";
    }
    $html .= "</ul>";
    return $html;}
}