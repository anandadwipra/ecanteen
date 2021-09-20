<?php

namespace Database\Seeders;

use App\Models\Acces;
use Illuminate\Database\Seeder;

class AccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acces::create([
            'name'=>'admin',
            'slug'=>'admn',
        ]);
        Acces::create([
            'name'=>'penjual',
            'slug'=>'pnjl',
        ]);
        Acces::create([
            'name'=>'siswa',
            'slug'=>'ssw',
        ]);
    }
}
