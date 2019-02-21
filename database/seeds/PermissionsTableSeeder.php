<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega usuarios',
        ]);

        Permission::create([
            'name' => 'ver detalle',
            'slug' => 'users.show',
            'description' => 'ver detalle usuarios',
        ]);

        Permission::create([
            'name' => 'Edicion usuarios',
            'slug' => 'users.edit',
            'description' => 'editar detalle usuarios',
        ]);

        Permission::create([
            'name' => 'Eliminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'Elimnar usuarios',
        ]);


        //Roles
        Permission::create([
            'name' => 'Navegar rol',
            'slug' => 'roles.index',
            'description' => 'Lista y navega rol',
        ]);

        Permission::create([
            'name' => 'ver detalle rol',
            'slug' => 'roles.show',
            'description' => 'ver detalle rol',
        ]);

        Permission::create([
            'name' => 'crear  rol',
            'slug' => 'roles.create',
            'description' => 'ver detalle rol',
        ]);

        Permission::create([
            'name' => 'Edicion rol',
            'slug' => 'roles.edit',
            'description' => 'editar detalle rol',
        ]);

        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Elimnar rol',
        ]);


        //modelo
        Permission::create([
            'name' => 'Navegar scorts',
            'slug' => 'scorts.index',
            'description' => 'Lista y navega scorts',
        ]);

        Permission::create([
            'name' => 'ver detalle scort',
            'slug' => 'scorts.show',
            'description' => 'ver detalle scort',
        ]);

        Permission::create([
            'name' => 'crear  scort',
            'slug' => 'scorts.create',
            'description' => 'ver detalle scort',
        ]);

        Permission::create([
            'name' => 'Edicion scort',
            'slug' => 'scorts.edit',
            'description' => 'editar detalle scort',
        ]);

        Permission::create([
            'name' => 'Eliminar scort',
            'slug' => 'scorts.destroy',
            'description' => 'Elimnar scort',
        ]);


        //paquetes
        Permission::create([
            'name' => 'Navegar paquete',
            'slug' => 'packages.index',
            'description' => 'Lista y navega paquete',
        ]);

        Permission::create([
            'name' => 'ver detalle paquete',
            'slug' => 'packages.show',
            'description' => 'ver detalle paquete',
        ]);

        Permission::create([
            'name' => 'crear  paquete',
            'slug' => 'packages.create',
            'description' => 'ver detalle paquete',
        ]);

        Permission::create([
            'name' => 'Edicion paquete',
            'slug' => 'packages.edit',
            'description' => 'editar detalle paquete',
        ]);

        Permission::create([
            'name' => 'Eliminar paquete',
            'slug' => 'packages.destroy',
            'description' => 'Elimnar paquete',
        ]);


        //configuracion
        Permission::create([
            'name' => 'Navegar configuración',
            'slug' => 'configurations.index',
            'description' => 'Lista y navega configuración',
        ]);

        Permission::create([
            'name' => 'ver detalle configuración',
            'slug' => 'configurations.show',
            'description' => 'ver detalle configuración',
        ]);

        Permission::create([
            'name' => 'crear  configuración',
            'slug' => 'configurations.create',
            'description' => 'ver detalle configuración',
        ]);

        Permission::create([
            'name' => 'Edicion configuración',
            'slug' => 'configurations.edit',
            'description' => 'editar detalle configuración',
        ]);

        Permission::create([
            'name' => 'Eliminar configuración',
            'slug' => 'configurations.destroy',
            'description' => 'Elimnar configuración',
        ]);

        //notificacion
        Permission::create([
            'name' => 'Navegar notificación',
            'slug' => 'notifications.index',
            'description' => 'Lista y navega notificación',
        ]);

        Permission::create([
            'name' => 'ver detalle notificación',
            'slug' => 'notifications.show',
            'description' => 'ver detalle notificación',
        ]);

        Permission::create([
            'name' => 'crear  notificación',
            'slug' => 'notifications.create',
            'description' => 'ver detalle notificación',
        ]);

        Permission::create([
            'name' => 'Edicion notificación',
            'slug' => 'notifications.edit',
            'description' => 'editar detalle notificación',
        ]);

        Permission::create([
            'name' => 'Eliminar notificación',
            'slug' => 'notifications.destroy',
            'description' => 'Elimnar notificación',
        ]);


        //cuenta
        Permission::create([
            'name' => 'Navegar cuenta',
            'slug' => 'accounts.index',
            'description' => 'Lista y navega cuenta',
        ]);

        Permission::create([
            'name' => 'ver detalle cuenta',
            'slug' => 'accounts.show',
            'description' => 'ver detalle cuenta',
        ]);

        Permission::create([
            'name' => 'crear  cuenta',
            'slug' => 'accounts.create',
            'description' => 'ver detalle cuenta',
        ]);

        Permission::create([
            'name' => 'Edicion cuenta',
            'slug' => 'accounts.edit',
            'description' => 'editar detalle cuenta',
        ]);

        Permission::create([
            'name' => 'Eliminar cuenta',
            'slug' => 'accounts.destroy',
            'description' => 'Elimnar cuenta',
        ]);


        //perfil
        Permission::create([
            'name' => 'Navegar perfil',
            'slug' => 'profiles.index',
            'description' => 'Lista y navega perfil',
        ]);

        Permission::create([
            'name' => 'ver detalle perfil',
            'slug' => 'profiles.show',
            'description' => 'ver detalle perfil',
        ]);

        Permission::create([
            'name' => 'crear  perfil',
            'slug' => 'profiles.create',
            'description' => 'ver detalle perfil',
        ]);

        Permission::create([
            'name' => 'Edicion perfil',
            'slug' => 'profiles.edit',
            'description' => 'editar detalle perfil',
        ]);

        Permission::create([
            'name' => 'Eliminar perfil',
            'slug' => 'profiles.destroy',
            'description' => 'Elimnar perfil',
        ]);


        //fotografias
        Permission::create([
            'name' => 'Navegar galeria',
            'slug' => 'galleries.index',
            'description' => 'Lista y navega galeria',
        ]);

        Permission::create([
            'name' => 'ver detalle galeria',
            'slug' => 'galleries.show',
            'description' => 'ver detalle galeria',
        ]);

        Permission::create([
            'name' => 'crear  galeria',
            'slug' => 'galleries.create',
            'description' => 'ver detalle galeria',
        ]);

        Permission::create([
            'name' => 'Edicion galeria',
            'slug' => 'galleries.edit',
            'description' => 'editar detalle galeria',
        ]);

        Permission::create([
            'name' => 'Eliminar galeria',
            'slug' => 'galleries.destroy',
            'description' => 'Elimnar galeria',
        ]);

        //videos
        Permission::create([
            'name' => 'Navegar video',
            'slug' => 'videos.index',
            'description' => 'Lista y navega video',
        ]);

        Permission::create([
            'name' => 'ver detalle video',
            'slug' => 'videos.show',
            'description' => 'ver detalle video',
        ]);

        Permission::create([
            'name' => 'crear  video',
            'slug' => 'videos.create',
            'description' => 'ver detalle video',
        ]);

        Permission::create([
            'name' => 'Edicion video',
            'slug' => 'videos.edit',
            'description' => 'editar detalle video',
        ]);

        Permission::create([
            'name' => 'Eliminar video',
            'slug' => 'videos.destroy',
            'description' => 'Elimnar video',
        ]);


        //videos
        Permission::create([
            'name' => 'Navegar mensaje',
            'slug' => 'messages.index',
            'description' => 'Lista y navega mensaje',
        ]);

        Permission::create([
            'name' => 'ver detalle mensaje',
            'slug' => 'messages.show',
            'description' => 'ver detalle mensaje',
        ]);

        Permission::create([
            'name' => 'crear  mensaje',
            'slug' => 'messages.create',
            'description' => 'ver detalle mensaje',
        ]);

        Permission::create([
            'name' => 'Edicion mensaje',
            'slug' => 'messages.edit',
            'description' => 'editar detalle mensaje',
        ]);

        Permission::create([
            'name' => 'Eliminar mensaje',
            'slug' => 'messages.destroy',
            'description' => 'Elimnar mensaje',
        ]);





    }
}
