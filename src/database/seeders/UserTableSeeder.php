<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'full_name'=>'Admin Joss',
            'username'=>'Admin',
            'email'=>'anandabiru04@gmail.com',
            'access_id'=>1,
            'password'=>bcrypt('password')
        ]);
        User::create([
            'full_name'=>'Om Warteg',
            'username'=>'Ow',
            'email'=>'OmWarteg@gmail.com',
            'access_id'=>2,
            'password'=>bcrypt('password')
        ]);
        User::create([
            'full_name'=>'Si Gendut',
            'username'=>'Sg',
            'email'=>'SiGendut@gmail.com',
            'access_id'=>3,
            'password'=>bcrypt('password')
        ]);
        User::create([
            'full_name'=>'Si Rakus',
            'username'=>'Sr',
            'email'=>'SiRakus@gmail.com',
            'access_id'=>3,
            'password'=>bcrypt('password')
        ]);
    }
}
