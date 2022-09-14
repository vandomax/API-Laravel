<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeSuporteController extends Controller
{
    public function getEquipeSuporte()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Suporte')->get();
        return response()->json([
            'data' => $equipe
        ]);
    }
}
