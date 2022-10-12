<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeComercialController extends Controller
{
    public function getEquipeComercial()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Comercial')->get();
        return response()->json([
            'data' => $equipe
        ]);
    }
}
