<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name' => 'Serivicio 1',
        ]);

        Service::create([
            'name' => 'Serivicio 2',
        ]);

        Service::create([
            'name' => 'Serivicio 3',
        ]);

        Service::create([
            'name' => 'Serivicio 4',
        ]);
        Service::create([
            'name' => 'Serivicio 5',
        ]);
    }
}
