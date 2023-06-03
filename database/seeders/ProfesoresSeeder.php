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

            ['rut'=>'21450686-6','nombre'=>'Alonso','apellido'=>'Farias','created_at'=>Carbon::now()],

        ]);
    }
}
