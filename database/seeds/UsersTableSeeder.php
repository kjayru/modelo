<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,10)->create();

        Role::create([
            'name' => 'Administrador',
            'slug' => 'admin',
            'description' => 'Administrador general',
        ]);

        Role::create([
            'name' => 'modelo',
            'slug' => 'modelo',
            'description' => 'Modelo',
        ]);
        Role::create([
            'name' => 'usario',
            'slug' => 'usuario',
            'description' => 'usuario registrado',
        ]);    
    }
}
