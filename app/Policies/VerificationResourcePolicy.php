<?php

namespace App\Policies;

use App\Models\User;
use App\Models\VerificationResource;
use Illuminate\Auth\Access\Response;

class VerificationResourcePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('Medios de verificación: Listar');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('Medios de verificación: Crear');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, VerificationResource $verificationResource): bool
    {
        return $user->can('Medios de verificación: Editar');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, VerificationResource $verificationResource): bool
    {
        return $user->can('Medios de verificación: Eliminar');
    }
}
