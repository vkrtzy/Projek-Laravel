<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'bksehat admin',
            'email' => 'iloveanime@gmail.com',
            'password' => Hash::make('kawaiikutegomenn'),
            'level' => 'admin',
            'jenis_kelamin' => 'Laki-laki',
            'noktp' => '1420003213029'
        ]);
            
    }
}
