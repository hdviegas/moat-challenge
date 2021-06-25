<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@moat.ai',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@moat.ai',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);
    }
}
