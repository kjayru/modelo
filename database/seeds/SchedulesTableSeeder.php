<?php

use Illuminate\Database\Seeder;
use App\Schedule;
class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create([
            'name' => 'Lunes',    
        ]);
        Schedule::create([
            'name' => 'Martes',    
        ]);
        Schedule::create([
            'name' => 'Miercoles',    
        ]);
        Schedule::create([
            'name' => 'Jueves',    
        ]);
        Schedule::create([
            'name' => 'Viernes',    
        ]);
        Schedule::create([
            'name' => 'Sabado',    
        ]);
        Schedule::create([
            'name' => 'Domingo',    
        ]);
    }
}
