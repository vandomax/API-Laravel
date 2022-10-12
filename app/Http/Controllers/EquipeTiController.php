<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;
//puxando o models que puxa os dados do bando de dados

class EquipeTiController extends Controller
{
    public function getEquipeTi()
    { //puxando os dados onde a coluna setor = Ti
        $equipe = TiSaudeEquipe::where('setor', 'Ti')->get();
        return response()->json([
            'data' => $equipe
        ]);
    }
}
