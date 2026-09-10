<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        Aluno::create([
            'nome' => 'Ana Silva',
            'email' => 'ana@email.com',
            'curso' => 'Engenharia de Software',
        ]);

        Aluno::create([
            'nome' => 'Bruno Souza',
            'email' => 'bruno@email.com',
            'curso' => 'Engenharia de Software',
        ]);

        Aluno::create([
            'nome' => 'Carlos Lima',
            'email' => 'carlos@email.com',
            'curso' => 'Administracao',
        ]);

        Aluno::create([
            'nome' => 'Daniela Costa',
            'email' => 'daniela@email.com',
            'curso' => 'Engenharia de Software',
        ]);

        Aluno::create([
            'nome' => 'Eduardo Alves',
            'email' => 'eduardo@email.com',
            'curso' => 'Sistemas de Informacao',
        ]);

        Aluno::create([
            'nome' => 'Fernanda Rocha',
            'email' => 'fernanda@email.com',
            'curso' => 'Engenharia de Software',
        ]);

        Aluno::create([
            'nome' => 'Gabriel Santos',
            'email' => 'gabriel@email.com',
            'curso' => 'Administracao',
        ]);

        Aluno::create([
            'nome' => 'Helena Martins',
            'email' => 'helena@email.com',
            'curso' => 'Engenharia de Software',
        ]);

        Aluno::create([
            'nome' => 'Igor Oliveira',
            'email' => 'igor@email.com',
            'curso' => 'Sistemas de Informacao',
        ]);

        Aluno::create([
            'nome' => 'Juliana Pereira',
            'email' => 'juliana@email.com',
            'curso' => 'Engenharia de Software',
        ]);
    }
}