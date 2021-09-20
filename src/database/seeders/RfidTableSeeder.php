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
            'wallet_id'=>3,
            'rfid'=>"XAY786"
        ]);
        Rfid::create([
            'wallet_id'=>4,
            'rfid'=>"KUH886"
        ]);
    }
}
