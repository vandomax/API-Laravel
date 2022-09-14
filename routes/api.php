<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeTiController;
use App\Http\Controllers\EquipeFinanceiroController;
use App\Http\Controllers\EquipeSuporteController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('equipe-financeiro', [EquipeFinanceiroController::class, 'getEquipeFinanceiro'])->name('eequipe-financeiro');
Route::get('equipe-ti', [EquipeTiController::class, 'getEquipeTi'])->name('equipe-ti');
Route::get('equipe-suporte', [EquipeSuporteController::class, 'getEquipeSuporte'])->name('equipe-suporte');
