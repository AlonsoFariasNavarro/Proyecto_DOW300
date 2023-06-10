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

            ['propuesta_id'=>1,'profesor_rut'=>'23244141-2','fecha'=>Carbon::now(),'hora'=>Carbon::now(),'comentario'=>'Esto es un comentario','created_at'=>Carbon::now()],
            ['propuesta_id'=>1,'profesor_rut'=>'21356454-3','fecha'=>Carbon::now(),'hora'=>Carbon::now(),'comentario'=>'Esto es un comentario','created_at'=>Carbon::now()],
            ['propuesta_id'=>2,'profesor_rut'=>'54572345-4','fecha'=>Carbon::now(),'hora'=>Carbon::now(),'comentario'=>'Esto es un comentario','created_at'=>Carbon::now()],
            ['propuesta_id'=>3,'profesor_rut'=>'43435353-5','fecha'=>Carbon::now(),'hora'=>Carbon::now(),'comentario'=>'Esto es un comentario','created_at'=>Carbon::now()],
            ['propuesta_id'=>4,'profesor_rut'=>'24547378-6','fecha'=>Carbon::now(),'hora'=>Carbon::now(),'comentario'=>'Esto es un comentario','created_at'=>Carbon::now()],
            ['propuesta_id'=>5,'profesor_rut'=>'19546758-9','fecha'=>Carbon::now(),'hora'=>Carbon::now(),'comentario'=>'Esto es un comentario','created_at'=>Carbon::now()],
            ['propuesta_id'=>6,'profesor_rut'=>'20435467-8','fecha'=>Carbon::now(),'hora'=>Carbon::now(),'comentario'=>'Esto es un comentario','created_at'=>Carbon::now()],

        ]);
    }
}
