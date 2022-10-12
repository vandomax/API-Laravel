<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeRhController extends Controller
{
    public function getEquipeRh()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Rh')->get();
        return response()->json([
            'data' => $equipe
        ]);
    }
}
