<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bimo Nugraha',
            'email' => 'nugraha@gmail.com',
            'password' => Hash::make('bimbimoo'),
            'is_admin' => 0,
        ]);
    }
}
