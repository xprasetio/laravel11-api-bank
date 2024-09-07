<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OperatorCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('operator_cards')->insert([
            [
                'name' => 'Telkomsel',
                'thumbnail' => 'telkomsel.png',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Indosat',
                'thumbnail' => 'indosat.png',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Singtel',
                'thumbnail' => 'singtel.png',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            
        ]);
    }
}
