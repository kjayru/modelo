<?php

use Illuminate\Database\Seeder;
use App\Filter;
class FiltersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filter::create([
            'name' => 'video',
        ]);
        Filter::create([
            'name' => 'cara',
        ]);
        Filter::create([
            'name' => 'experiencia',
        ]);
        Filter::create([
            'name' => 'disponible',
        ]);
        Filter::create([
            'name' => 'promocion',
        ]);
    }
}
