<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Ticket_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tickets')->insert([
            [
                'date' => 2021,
                'price' => 6,
                'train_id'=>1,
                'ticket_types_id' => 1
            ],

            [
                'date' => 2023,
                'price' => 48,
                'train_id'=>2,
                'ticket_types_id' => 2
            ],

            [
                'date' => 2024,
                'price' => 108,
                'train_id'=>3,
                'ticket_types_id' => 3
            ],
        ]);
    }
}
