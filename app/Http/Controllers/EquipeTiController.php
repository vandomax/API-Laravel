<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeTiController extends Controller
{
    public function getEquipeTi()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Ti')->get();
        return response()->json([
            'data' => $equipe
        ]);
    }
}