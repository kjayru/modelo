<?php

use Illuminate\Database\Seeder;
use App\Package;
class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::create([
            'name' => 'Premium',
            'description'=>'paquete premium'
            
        ]);
        Package::create([
            'name' => 'Free',  
            'description'=>'paquete libre'
        ]);
    }
}
