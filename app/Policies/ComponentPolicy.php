<?php

namespace App\Policies;

use App\Models\Component;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ComponentPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('Componentes: Listar');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('Componentes: Crear');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Component $component): bool
    {
        return $user->can('Componentes: Editar');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Component $component): bool
    {
        return $user->can('Componentes: Eliminar');
    }
}
