<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeSgController extends Controller
{
    public function getEquipeSg()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Sg')->get();
        return response()->json([
            'data' => $equipe
            ]);
    }
}
