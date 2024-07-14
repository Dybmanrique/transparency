<?php

namespace App\Policies;

use App\Models\DocumentDetail;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DocumentDetailPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('Detalles de documentos: Listar');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('Detalles de documentos: Crear');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, DocumentDetail $documentDetail): bool
    {
        return $user->can('Detalles de documentos: Editar');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, DocumentDetail $documentDetail): bool
    {
        return $user->can('Detalles de documentos: Eliminar');
    }
}
