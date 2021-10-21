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
            'full_name'=>'Ananda Dwi',
            'username'=>'Ananda',
            'email'=>'anandabiru04@gmail.com',
            'access_id'=>1,
            'password'=>bcrypt('password')
        ]);
        User::create([
            'full_name'=>'Devi Kurnia',
            'username'=>'Devi',
            'email'=>'Devi@gmail.com',
            'access_id'=>2,
            'password'=>bcrypt('password')
        ]);
        User::create([
            'full_name'=>'Arif Maulana',
            'username'=>'Arif',
            'email'=>'Arif@gmail.com',
            'access_id'=>2,
            'password'=>bcrypt('password')
        ]);
        User::create([
            'full_name'=>'Firman Arifin',
            'username'=>'Firman',
            'email'=>'Firman@gmail.com',
            'access_id'=>3,
            'password'=>bcrypt('password')
        ]);
        User::create([
            'full_name'=>'Reza Ferdiana',
            'username'=>'Reza',
            'email'=>'Rezaferdiana@gmail.com',
            'access_id'=>3,
            'password'=>bcrypt('password')
        ]);
    }
}
