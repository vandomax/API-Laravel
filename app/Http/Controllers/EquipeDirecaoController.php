<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeDirecaoController extends Controller
{
    public function getEquipeDirecao()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Direcao')->get();
        return response()->json([
            'data' => $equipe
        ]);
    }
}
