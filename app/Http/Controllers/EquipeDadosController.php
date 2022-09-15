<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeDadosController extends Controller
{
    public function getEquipeDados()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Dados')->get();
        return response()->json([
        'data' => $equipe
        ]);
    
    }
}
