<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiSaudeEquipe;

class EquipeProdutoController extends Controller
{
    public function getEquipeProduto()
    {
        $equipe = TiSaudeEquipe::where('setor', 'Produto')->get();
        return response()->json([
            'data' => $equipe
            ]);
    }
}
