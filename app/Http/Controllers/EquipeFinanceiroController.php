<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeFinanceiroController extends Controller
{
    public function getEquipeFinanceiro()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Financeiro')->get();
        return response()->json([
            'data' => $equipe
        ]);
    }
}
