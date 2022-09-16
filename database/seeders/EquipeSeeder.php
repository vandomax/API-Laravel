<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TiSaudeEquipe;

class EquipeSeeder extends Seeder
{
    public function run()
    {
        TiSaudeEquipe::create(
            [
                "nome" => "IGOR DO AMARAL",
                "email" => "igor@tisaude.com",
                "setor" => "Administrativo",
                "cargo" => "Administrador1",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "JOÃO MARCELO",
                "email" => "joao@tisaude.com",
                "setor" => "Administrativo",
                "cargo" => "Administrador1",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "DEBORA GUIOMAR",
                "email" => "debora@tisaude.com",
                "setor" => "Comercial",
                "cargo" => "Analista de Comercial",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "MARIANA VALENÇA",
                "email" => "mariana@tisaude.com",
                "setor" => "Comercial",
                "cargo" => "Analista de Comercial",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "TITO MAGALHAES",
                "email" => "tito@tisaude.com",
                "setor" => "Comercial",
                "cargo" => "Gerente Comercial",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "ALYNE DAYANE",
                "email" => "alyne@tisaude.com",
                "setor" => "Cs",
                "cargo" => "Supervisora de CS",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "ANNA JULIA",
                "email" => "anna@tisaude.com",
                "setor" => "Cs",
                "cargo" => "Analista de CS",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "WANESSA WALERIA",
                "email" => "wanessa@tisaude.com",
                "setor" => "Cs",
                "cargo" => "Analista de CS",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "PEDRO ELIAS",
                "email" => "pedro@tisaude.com",
                "setor" => "Dados",
                "cargo" => "Analista de dados",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "LUCAS PESTER",
                "email" => "lucas@tisaude.com",
                "setor" => "Dados",
                "cargo" => "Analista de dados",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Eduardo Felipe",
                "email" => "eduardo@tisaude.com",
                "setor" => "Dados",
                "cargo" => "Engenheiro de dados",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "FLAVIO EDUARDO",
                "email" => "flavio@tisaude.com",
                "setor" => "Direcao",
                "cargo" => "COO",
                "avatar" => ""
            ]
        ); 
        TiSaudeEquipe::create(
            [
                "nome" => "FRED RABELO",
                "email" => "fred@tisaude.com",
                "setor" => "Direcao",
                "cargo" => "CEO",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Edmara Gomes",
                "email" => "edmara@tisaude.com",
                "setor" => "Financeiro",
                "cargo" => "Analista de financeiro",
                "avatar" => ""
            ]
        ); 
        TiSaudeEquipe::create(
            [
                "nome" => "ANA CLAUDIA FERREIRA",
                "email" => "ana@tisaude.com",
                "setor" => "Financeiro",
                "cargo" => "Analista financeiro",
                "avatar" => ""
            ]
        ); 
        TiSaudeEquipe::create(
            [
                "nome" => "EMILLY GRAZIELLY ",
                "email" => "emilly@tisaude.com",
                "setor" => "Financeiro",
                "cargo" => "Gestora do Financeiro",
                "avatar" => ""
            ]
        ); 
        TiSaudeEquipe::create(
            [
                "nome" => "ABEL ANDRE",
                "email" => "abel@tisaude.com",
                "setor" => "Marketing",
                "cargo" => "Design",
                "avatar" => ""
            ]
        ); 
        TiSaudeEquipe::create(
            [
                "nome" => "Geraldo Manoel",
                "email" => "geraldo@tisaude.com",
                "setor" => "Marketing",
                "cargo" => "Analista de tráfego",
                "avatar" => ""
            ]
        ); 
        TiSaudeEquipe::create(
            [
                "nome" => "SOL",
                "email" => "sol@tisaude.com",
                "setor" => "Marketing",
                "cargo" => "Head of Marketing",
                "avatar" => ""
            ]
        ); 
        TiSaudeEquipe::create(
            [
                "nome" => "JHONYS LIMA",
                "email" => "jhonys@tisaude.com",
                "setor" => "Produto",
                "cargo" => "Analista de produto",
                "avatar" => ""
            ]
        ); 
        TiSaudeEquipe::create(
            [
                "nome" => "RODRIGO DE ARAUJO",
                "email" => "rodrigo@tisaude.com",
                "setor" => "Produto",
                "cargo" => "Supervisor de produto",
                "avatar" => ""
            ]
        ); 
        TiSaudeEquipe::create(
            [
                "nome" => "TACIANA BARROS",
                "email" => "taciana@tisaude.com",
                "setor" => "Produto",
                "cargo" => "Analista de produto",
                "avatar" => ""
            ]
        ); 
        TiSaudeEquipe::create(
            [
                "nome" => "GABRIELA ARAUJO",
                "email" => "gabriela@tisaude.com",
                "setor" => "Rh",
                "cargo" => "Gestora de Rh",
                "avatar" => ""
            ]
        ); 
        TiSaudeEquipe::create(
            [
                "nome" => "TAMIRES CAETANO",
                "email" => "tamires@tisaude.com",
                "setor" => "Rh",
                "cargo" => "Analista de rh",
                "avatar" => ""
            ]
        ); 
        TiSaudeEquipe::create(
            [
                "nome" => "Dede",
                "email" => "dede@tisaude.com",
                "setor" => "Sg",
                "cargo" => "Serviços gerais",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "VANDO",
                "email" => "vando@tisaude.com",
                "setor" => "Suporte",
                "cargo" => "Estagiário",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "KAMILA ALVES",
                "email" => "kamila@tisaude.com",
                "setor" => "Suporte",
                "cargo" => "Head of Support",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "ALEXANDRE DE OLIVEIRA",
                "email" => "alexandre@tisaude.com",
                "setor" => "Suporte",
                "cargo" => "Analista de suporte pleno",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Micaela Lais",
                "email" => "micaela@tisaude.com",
                "setor" => "Ti",
                "cargo" => "Analista de testes",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Savio",
                "email" => "savio@tisaude.com",
                "setor" => "Ti",
                "cargo" => "Programador",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "ALAN BATISTA",
                "email" => "alan@tisaude.com",
                "setor" => "Ti",
                "cargo" => "Head of IT",
                "avatar" => ""
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "EMANUEL AUGUSTO",
                "email" => "emanuel@tisaude.com",
                "setor" => "Ti",
                "cargo" => "Arquiteto de software",
                "avatar" => ""
            ]
        );
    }
}
