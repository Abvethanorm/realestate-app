<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([
        'name' => 'Admin',
        'email'=>'admin@aol.com',
        'role_id' => '1',
        'password' => Hash::make('password123'),
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString()
       ]);
         DB::table('users')->insert([
        'name' => 'Agent',
        'email'=>'agent@aol.com',
        'role_id' => '2',
        'password' => Hash::make('password123'),
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString()
       ]);
         DB::table('users')->insert([
        'name' => 'Customer',
        'email'=>'customer@aol.com',
        'role_id' => '3',
        'password' => Hash::make('password123'),
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString()
       ]);
    }
}
