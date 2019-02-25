<?php

use Illuminate\Database\Seeder;
use App\Region;
class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create([
            'name' => 'Amazonas',
        ]);
        Region::create([
            'name' => 'Ancash',
        ]);
        Region::create([
            'name' => 'Apurimac',
        ]);
        Region::create([
            'name' => 'Arequipa',
        ]);
        Region::create([
            'name' => 'Ayacucho',
        ]);
        Region::create([
            'name' => 'Cajamarca',
        ]);
        Region::create([
            'name' => 'Callao',
        ]);
        Region::create([
            'name' => 'Cuzco',
        ]);
        Region::create([
            'name' => 'Huancavelica',
        ]);
        Region::create([
            'name' => 'Huanuco',
        ]);
        Region::create([
            'name' => 'Ica',
        ]);
        Region::create([
            'name' => 'Junin',
        ]);
        Region::create([
            'name' => 'La libertad',
        ]);
        Region::create([
            'name' => 'Lambayeque',
        ]);
        Region::create([
            'name' => 'Lima',
        ]);
        Region::create([
            'name' => 'La libertad',
        ]);
        Region::create([
            'name' => 'Loreto',
        ]);
        Region::create([
            'name' => 'Madre de Dios',
        ]);
        Region::create([
            'name' => 'Moquegua',
        ]);
        Region::create([
            'name' => 'Pasco',
        ]);
        Region::create([
            'name' => 'Piura',
        ]);
        Region::create([
            'name' => 'Puno',
        ]);
        Region::create([
            'name' => 'San Martin',
        ]);
        Region::create([
            'name' => 'Tacna',
        ]);
        Region::create([
            'name' => 'Tumbes',
        ]);
        Region::create([
            'name' => 'Ucayali',
        ]);
    }
}
