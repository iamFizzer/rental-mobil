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
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' =>'Administrator',
            'alamat' =>'Bandung',
            'no_telp' =>'222222222222',
            'no_sim' =>'3333333333333',
            'email' =>'admin@rental.com',
            'password' => Hash::make('admin'),
            'role' => '111',
        ]);
    }
}
