<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfesorPropuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profesor_propuesta')->insert([

            ['propuesta_id'=>1,'profesor_rut'=>'21450686-6','fecha'=>'2023-06-02','hora'=>'20:52','comentario'=>'Esto es un comentario','created_at'=>Carbon::now()],

        ]);
    }
}
