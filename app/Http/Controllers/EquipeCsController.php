<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeCsController extends Controller
{
    public function getEquipeCs()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Cs')->get();
        return response()->json([
        'data' => $equipe
        ]);
    
    }
}
