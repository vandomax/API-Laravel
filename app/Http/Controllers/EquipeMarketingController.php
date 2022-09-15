<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeMarketingController extends Controller
{
    public function getEquipeMarketing()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Marketing')->get();
        return response()->json([
        'data' => $equipe
        ]);
    
    }
}
