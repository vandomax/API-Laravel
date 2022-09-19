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
                "nome" => "Igor Do Amaral",
                "email" => "igor@tisaude.com",
                "setor" => "Administrativo",
                "cargo" => "Administrador",
                "avatar" => "http://localhost:8000/images/igor.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "João Marcelo",
                "email" => "joao@tisaude.com",
                "setor" => "Administrativo",
                "cargo" => "Administrador",
                "avatar" => "http://localhost:8000/images/joao.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Debora Guiomar",
                "email" => "debora@tisaude.com",
                "setor" => "Comercial",
                "cargo" => "Analista de Comercial",
                "avatar" => "http://localhost:8000/images/debora.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Mariana Valença",
                "email" => "mariana@tisaude.com",
                "setor" => "Comercial",
                "cargo" => "Analista de Comercial",
                "avatar" => "http://localhost:8000/images/marianav.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Tito Magalhães",
                "email" => "tito@tisaude.com",
                "setor" => "Comercial",
                "cargo" => "Gerente Comercial",
                "avatar" => "http://localhost:8000/images/tito.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Alyne Dayane",
                "email" => "alyne@tisaude.com",
                "setor" => "Cs",
                "cargo" => "Supervisora de CS",
                "avatar" => "http://localhost:8000/images/alyne.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Anna Júlia",
                "email" => "anna@tisaude.com",
                "setor" => "Cs",
                "cargo" => "Analista de CS",
                "avatar" => "http://localhost:8000/images/anna.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Wanessa Walleria",
                "email" => "wanessa@tisaude.com",
                "setor" => "Cs",
                "cargo" => "Analista de CS",
                "avatar" => "http://localhost:8000/images/wanessa.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Pedro",
                "email" => "pedro@tisaude.com",
                "setor" => "Dados",
                "cargo" => "Analista de dados",
                "avatar" => "http://localhost:8000/images/pedro.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Lucas Pester",
                "email" => "lucas@tisaude.com",
                "setor" => "Dados",
                "cargo" => "Analista de dados",
                "avatar" => "http://localhost:8000/images/lucas.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Eduardo Felipe",
                "email" => "eduardo@tisaude.com",
                "setor" => "Dados",
                "cargo" => "Engenheiro de dados",
                "avatar" => "http://localhost:8000/images/edu.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Flávio Eduardo",
                "email" => "flavio@tisaude.com",
                "setor" => "Direcao",
                "cargo" => "COO",
                "avatar" => "http://localhost:8000/images/flavio.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Fred Rabelo",
                "email" => "fred@tisaude.com",
                "setor" => "Direcao",
                "cargo" => "CEO",
                "avatar" => "http://localhost:8000/images/fred.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Edmara Gomes",
                "email" => "edmara@tisaude.com",
                "setor" => "Financeiro",
                "cargo" => "Analista de financeiro",
                "avatar" => "http://localhost:8000/images/edmara.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Ana Claúdia Ferreira",
                "email" => "ana@tisaude.com",
                "setor" => "Financeiro",
                "cargo" => "Analista financeiro",
                "avatar" => "http://localhost:8000/images/claudia.jpg"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Emilly Grazielly ",
                "email" => "emilly@tisaude.com",
                "setor" => "Financeiro",
                "cargo" => "Gestora do Financeiro",
                "avatar" => "http://localhost:8000/images/emilly.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Abel André",
                "email" => "abel@tisaude.com",
                "setor" => "Marketing",
                "cargo" => "Design",
                "avatar" => "http://localhost:8000/images/abel.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Geraldo Manoel",
                "email" => "geraldo@tisaude.com",
                "setor" => "Marketing",
                "cargo" => "Analista de tráfego",
                "avatar" => "http://localhost:8000/images/geraldo.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Solange",
                "email" => "sol@tisaude.com",
                "setor" => "Marketing",
                "cargo" => "Head of Marketing",
                "avatar" => "http://localhost:8000/images/sol.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Jhonys Lima",
                "email" => "jhonys@tisaude.com",
                "setor" => "Produto",
                "cargo" => "Analista de produto",
                "avatar" => "http://localhost:8000/images/jhonny.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Rodrigo de Araújo",
                "email" => "rodrigo@tisaude.com",
                "setor" => "Produto",
                "cargo" => "Supervisor de produto",
                "avatar" => "http://localhost:8000/images/rodrigo.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Taciana Barros",
                "email" => "taciana@tisaude.com",
                "setor" => "Produto",
                "cargo" => "Analista de produto",
                "avatar" => "http://localhost:8000/images/taciana.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Gabriela Araújo",
                "email" => "gabriela@tisaude.com",
                "setor" => "Rh",
                "cargo" => "Gestora de Rh",
                "avatar" => "http://localhost:8000/images/gabi.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Tamires Caetano",
                "email" => "tamires@tisaude.com",
                "setor" => "Rh",
                "cargo" => "Analista de rh",
                "avatar" => "http://localhost:8000/images/tamires.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Dede",
                "email" => "dede@tisaude.com",
                "setor" => "Asg",
                "cargo" => "Serviços gerais",
                "avatar" => "http://localhost:8000/images/dede.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Vando Max",
                "email" => "vando@tisaude.com",
                "setor" => "Suporte",
                "cargo" => "Estagiário",
                "avatar" => "http://localhost:8000/images/vando.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Kamila Alves",
                "email" => "kamila@tisaude.com",
                "setor" => "Suporte",
                "cargo" => "Head of Support",
                "avatar" => "http://localhost:8000/images/kamila.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Alexandre de Oliveira",
                "email" => "alexandre@tisaude.com",
                "setor" => "Suporte",
                "cargo" => "Analista de suporte pleno",
                "avatar" => "http://localhost:8000/images/xande.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Micaela Lais",
                "email" => "micaela@tisaude.com",
                "setor" => "Ti",
                "cargo" => "Analista de testes",
                "avatar" => "http://localhost:8000/images/micaela.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Savio Gomes",
                "email" => "savio@tisaude.com",
                "setor" => "Ti",
                "cargo" => "Programador",
                "avatar" => "http://localhost:8000/images/savio.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Alan Batista",
                "email" => "alan@tisaude.com",
                "setor" => "Ti",
                "cargo" => "Head of IT",
                "avatar" => "http://localhost:8000/images/alan.png"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Kleryston Thiago",
                "email" => "kleryston@tisaude.com",
                "setor" => "Ti",
                "cargo" => "Ti Ops",
                "avatar" => "http://localhost:8000/images/kleryston.jpg"
            ]
        );
        TiSaudeEquipe::create(
            [
                "nome" => "Emanuel Augusto",
                "email" => "emanuel@tisaude.com",
                "setor" => "Ti",
                "cargo" => "Arquiteto de software",
                "avatar" => "http://localhost:8000/images/emanuel.png"
            ]
        );
    }
}
