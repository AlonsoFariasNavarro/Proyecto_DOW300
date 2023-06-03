<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profesores')->insert([

            ['rut'=>'21450686-0','nombre'=>'Alonso','apellido'=>'Farias','created_at'=>Carbon::now()],
            ['rut'=>'21450686-1','nombre'=>'Alonso','apellido'=>'Farias','created_at'=>Carbon::now()],
            ['rut'=>'21450686-2','nombre'=>'Alonso','apellido'=>'Farias','created_at'=>Carbon::now()],
            ['rut'=>'21450686-3','nombre'=>'Alonso','apellido'=>'Farias','created_at'=>Carbon::now()],
            ['rut'=>'21450686-4','nombre'=>'Alonso','apellido'=>'Farias','created_at'=>Carbon::now()],
            ['rut'=>'21450686-5','nombre'=>'Alonso','apellido'=>'Farias','created_at'=>Carbon::now()],
            ['rut'=>'21450686-6','nombre'=>'Alonso','apellido'=>'Farias','created_at'=>Carbon::now()],
            ['rut'=>'21450686-7','nombre'=>'Alonso','apellido'=>'Farias','created_at'=>Carbon::now()],
            ['rut'=>'21450686-8','nombre'=>'Alonso','apellido'=>'Farias','created_at'=>Carbon::now()],
            ['rut'=>'21450686-9','nombre'=>'Alonso','apellido'=>'Farias','created_at'=>Carbon::now()],

        ]);
    }
}
