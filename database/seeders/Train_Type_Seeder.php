<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class Train_Type_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('train__types')->insert([
            [
                'type' => 'Cercanías'
            ],
            [
                'type' => 'Media Distancia'
            ],
            [
                'type' => 'Alta Velocidad'
            ],
        ]);
    }
}
