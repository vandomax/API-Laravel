<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeAdministrativoController extends Controller
{
    public function getEquipeAdministrativo()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Administrativo')->get();
        return response()->json([
            'data' => $equipe
        ]);
    }
}
