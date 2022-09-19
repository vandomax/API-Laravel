<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeTiController;
use App\Http\Controllers\EquipeFinanceiroController;
use App\Http\Controllers\EquipeSuporteController;
use App\Http\Controllers\EquipeAdministrativoController;
use App\Http\Controllers\EquipeComercialController;
use App\Http\Controllers\EquipeCsController;
use App\Http\Controllers\EquipeDadosController;
use App\Http\Controllers\EquipeDirecaoController;
use App\Http\Controllers\EquipeProdutoController;
use App\Http\Controllers\EquipeMarketingController;
use App\Http\Controllers\EquipeRhController;
use App\Http\Controllers\EquipeAsgController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('equipe-financeiro', [EquipeFinanceiroController::class, 'getEquipeFinanceiro'])->name('eequipe-financeiro');
Route::get('equipe-ti', [EquipeTiController::class, 'getEquipeTi'])->name('equipe-ti');
Route::get('equipe-suporte', [EquipeSuporteController::class, 'getEquipeSuporte'])->name('equipe-suporte');
Route::get('equipe-administrativo', [EquipeAdministrativoController::class, 'getEquipeAdministrativo'])->name('equipe-administrativo');
Route::get('equipe-comercial', [EquipeComercialController::class, 'getEquipeComercial'])->name('equipe-comercial');
Route::get('equipe-cs', [EquipeCsController::class, 'getEquipeCs'])->name('equipe-cs');
Route::get('equipe-dados', [EquipeDadosController::class, 'getEquipeDados'])->name('equipe-dados');
Route::get('equipe-direcao', [EquipeDirecaoController::class, 'getEquipeDirecao'])->name('equipe-direcao');
Route::get('equipe-produto', [EquipeProdutoController::class, 'getEquipeProduto'])->name('equipe-produto');
Route::get('equipe-marketing', [EquipeMarketingController::class, 'getEquipeMarketing'])->name('equipe-marketing');
Route::get('equipe-rh', [EquipeRhController::class, 'getEquipeRh'])->name('equipe-rh');
Route::get('equipe-sg', [EquipeAsgController::class, 'getEquipeAsg'])->name('equipe-sg');

