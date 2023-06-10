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

            ['rut'=>'23414565-0','nombre'=>'Bastian','apellido'=>'Rojas','created_at'=>Carbon::now()],
            ['rut'=>'22154353-1','nombre'=>'Rodrigo','apellido'=>'Plaza','created_at'=>Carbon::now()],
            ['rut'=>'23244141-2','nombre'=>'Fiora','apellido'=>'Laurent','created_at'=>Carbon::now()],
            ['rut'=>'21356454-3','nombre'=>'Rayo','apellido'=>'Mccuin','created_at'=>Carbon::now()],
            ['rut'=>'54572345-4','nombre'=>'To','apellido'=>'Mate','created_at'=>Carbon::now()],
            ['rut'=>'43435353-5','nombre'=>'Kick','apellido'=>'buttowski','created_at'=>Carbon::now()],
            ['rut'=>'24547378-6','nombre'=>'Donkey','apellido'=>'Kong','created_at'=>Carbon::now()],
            ['rut'=>'21435678-7','nombre'=>'Mario','apellido'=>'Mario','created_at'=>Carbon::now()],
            ['rut'=>'20435467-8','nombre'=>'Lugi','apellido'=>'Mario','created_at'=>Carbon::now()],
            ['rut'=>'19546758-9','nombre'=>'Optimus','apellido'=>'Prime','created_at'=>Carbon::now()],

        ]);
    }
}
