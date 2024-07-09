<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrator = Role::create(['name'=>'Administrador']);

        $permissions = [
            //NUMERALES
            'Numerales: Listar',
            'Numerales: Crear',
            'Numerales: Editar',
            'Numerales: Eliminar',
            //REGALMENTOS
            'Reglamentos: Listar',
            'Reglamentos: Crear',
            'Reglamentos: Editar',
            'Reglamentos: Eliminar',
            //CONDICIONES
            'Condiciones: Listar',
            'Condiciones: Crear',
            'Condiciones: Editar',
            'Condiciones: Eliminar',
            //COMPONENTES
            'Componentes: Listar',
            'Componentes: Crear',
            'Componentes: Editar',
            'Componentes: Eliminar',
            //INDICADORES
            'Indicadores: Listar',
            'Indicadores: Crear',
            'Indicadores: Editar',
            'Indicadores: Eliminar',
            //MEDIOS DE VERIFICACIÓN
            'Medios de verificación: Listar',
            'Medios de verificación: Crear',
            'Medios de verificación: Editar',
            'Medios de verificación: Eliminar',
            //INFORMACIÓN
            'Información: Listar',
            'Información: Crear',
            'Información: Editar',
            'Información: Eliminar',
            //DETALLES INFORMACIÓN
            'Detalles de información: Listar',
            'Detalles de información: Crear',
            'Detalles de información: Editar',
            'Detalles de información: Eliminar',
            //ROLES
            'Roles: Listar',
            'Roles: Crear',
            'Roles: Editar',
            'Roles: Eliminar',
            //USUARIOS
            'Usuarios: Listar',
            'Usuarios: Crear',
            'Usuarios: Editar',
            'Usuarios: Eliminar',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission])->assignRole($administrator);
        }
    }
}
