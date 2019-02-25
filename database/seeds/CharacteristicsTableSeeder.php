<?php

use Illuminate\Database\Seeder;
use App\Characteristic;

class CharacteristicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Characteristic::create([
            'name' => 'caracteristica 1',
        ]);

        Characteristic::create([
            'name' => 'caracteristica 2',
        ]);

        Characteristic::create([
            'name' => 'caracteristica 3',
        ]);

        Characteristic::create([
            'name' => 'caracteristica 4',
        ]);

        Characteristic::create([
            'name' => 'caracteristica 5',
        ]);
    }
}
