<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('propuestas')->insert([

            ['fecha' => '2023-06-02','documento' =>'es un documento','estado'=>1,'created_at'=>Carbon::now(),'estudiante_rut'=>'21193684'],

        ]);
    }
}
