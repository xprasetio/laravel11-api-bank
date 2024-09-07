<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin_users')->insert([
            'name' => 'Admin User',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('admin123'),
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
        
    }
}
