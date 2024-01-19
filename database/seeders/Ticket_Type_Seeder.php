<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Ticket_Type_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ticket__types')->insert([
            [
                'type' => 'Billete sencillo'
            ],

            [
                'type' => 'Abono mensual'
            ],

            [
                'type' => 'Abono trimestral'
            ],
        ]);
    }
}
