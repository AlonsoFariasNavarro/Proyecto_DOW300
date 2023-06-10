<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropuestasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('propuestas')->insert([

            ['fecha' => Carbon::now(),'documento' =>'es un documento','estado'=>1,'created_at'=>Carbon::now(),'estudiante_rut'=>'19434546-8'],
            ['fecha' => Carbon::now(),'documento' =>'es un documento','estado'=>2,'created_at'=>Carbon::now(),'estudiante_rut'=>'13043457-3'],
            ['fecha' => Carbon::now(),'documento' =>'es un documento','estado'=>1,'created_at'=>Carbon::now(),'estudiante_rut'=>'21450686-0'],
            ['fecha' => Carbon::now(),'documento' =>'es un documento','estado'=>2,'created_at'=>Carbon::now(),'estudiante_rut'=>'23324325-5'],
            ['fecha' => Carbon::now(),'documento' =>'es un documento','estado'=>1,'created_at'=>Carbon::now(),'estudiante_rut'=>'84343213-6'],
            ['fecha' => Carbon::now(),'documento' =>'es un documento','estado'=>2,'created_at'=>Carbon::now(),'estudiante_rut'=>'20324355-9'],

        ]);
    }
}
