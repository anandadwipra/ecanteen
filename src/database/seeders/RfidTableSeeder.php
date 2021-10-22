<?php

namespace Database\Seeders;

use App\Models\Rfid;
use Illuminate\Database\Seeder;

class RfidTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Rfid::create([
            'wallet_id'=>4,
            'rfid'=>"10399190167"
        ]);
        Rfid::create([
            'wallet_id'=>5,
            'rfid'=>"31711526"
        ]);
    }
}
