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


            ['rut'=>'21450686-0', 'nombre'=> 'Alonso','apellido' =>'Farias','email'=>'holas@gmail.com','created_at'=>Carbon::now()],
            ['rut'=>'15646734-1', 'nombre'=> 'Cristobal','apellido' =>'Macalapu','email'=>'toal@gmail.com','created_at'=>Carbon::now()],
            ['rut'=>'34393445-2', 'nombre'=> 'Toal','apellido' =>'Macalapu','email'=>'tobal@gmail.com','created_at'=>Carbon::now()],
            ['rut'=>'13043457-3', 'nombre'=> 'Antonio','apellido' =>'Navarro','email'=>'anvrr@gmail.com','created_at'=>Carbon::now()],
            ['rut'=>'13549546-4', 'nombre'=> 'Vicente','apellido' =>'Lorca','email'=>'vlorca@gmail.com','created_at'=>Carbon::now()],
            ['rut'=>'23324325-5', 'nombre'=> 'Brad','apellido' =>'Pit','email'=>'bpitt@gmail.com','created_at'=>Carbon::now()],
            ['rut'=>'84343213-6', 'nombre'=> 'Diego','apellido' =>'Rivarolla','email'=>'diegrv@gmail.com','created_at'=>Carbon::now()],
            ['rut'=>'25654543-7', 'nombre'=> 'Spider','apellido' =>'man','email'=>'sipdi@gmail.com','created_at'=>Carbon::now()],
            ['rut'=>'19434546-8', 'nombre'=> 'cristiano','apellido' =>'messi','email'=>'cm7@gmail.com','created_at'=>Carbon::now()],
            ['rut'=>'20324355-9', 'nombre'=> 'Papy','apellido' =>'Yankee','email'=>'Dk@gmail.com','created_at'=>Carbon::now()],

        ]);
    }
}
