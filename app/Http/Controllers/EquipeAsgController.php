<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeAsgController extends Controller
{
    public function getEquipeAsg()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Asg')->get();
        return response()->json([
            'data' => $equipe
            ]);
    }
}
