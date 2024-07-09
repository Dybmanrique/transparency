<?php

namespace App\Policies;

use App\Models\Numeral;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NumeralPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('Numerales: Listar');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('Numerales: Crear');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Numeral $numeral): bool
    {
        return $user->can('Numerales: Editar');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Numeral $numeral): bool
    {
        return $user->can('Numerales: Eliminar');
    }
}
