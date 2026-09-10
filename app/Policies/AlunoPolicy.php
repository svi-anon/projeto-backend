<?php

namespace App\Policies;

use App\Models\Aluno;
use App\Models\User;

class AlunoPolicy
{
    public function update(User $user, Aluno $aluno): bool
    {
        return $user->id === $aluno->user_id;
    }
}