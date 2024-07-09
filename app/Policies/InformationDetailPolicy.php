<?php

namespace App\Policies;

use App\Models\InformationDetail;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class InformationDetailPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('Detalles de información: Listar');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('Detalles de información: Crear');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, InformationDetail $informationDetail): bool
    {
        return $user->can('Detalles de información: Editar');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, InformationDetail $informationDetail): bool
    {
        return $user->can('Detalles de información: Eliminar');
    }
}
