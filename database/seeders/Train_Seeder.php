<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Train_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'nombre' => 'Renfe',
                'pasajeros' => 45,
                'anyo' => 1998,
                'train_types_id' => 1
            ],

            [
                'nombre' => 'Felipe',
                'pasajeros' => 109,
                'anyo' => 2013,
                'train_types_id' => 2
            ],

            [
                'nombre' => 'AVE',
                'pasajeros' => 345,
                'anyo' => 2024,
                'train_types_id' => 3
            ],
        ]);
    }
}
