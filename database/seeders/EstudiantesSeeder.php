<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estudiantes')->insert([


            ['rut'=>'21193684', 'nombre'=> 'Cristobal ','apellido' =>'Macalapu','email'=>'toal@gmail.com','created_at'=>Carbon::now()],

        ]);
    }
}
