<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
class create_users_table extends Seeder
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
            'name' => 'Cliente',
            'slug' => 'cliente',
            'description' => 'Cliente Podcast',
        ]);
        Role::create([
            'name' => 'Invitado',
            'slug' => 'guest',
            'description' => 'publico',
        ]);    
    }
}
