<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipeFinanceiroController extends Controller
{
    public function getEquipeFinanceiro()
    {
    $equipe = [
        [
            'name' => 'ANA CLAUDIA FERREIRA',
        ],
        [
            'name' => 'EDMARA GOMES ALVES',
        ],
        [
            'name' => 'EMILLY GRAZIELLY',
        ]
    ];
        return response()->json(['dados' => $equipe]);
    }
}
