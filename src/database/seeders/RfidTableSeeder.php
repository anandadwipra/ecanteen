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
            'rfid'=>"14724619025"
        ]);
        Rfid::create([
            'wallet_id'=>5,
            'rfid'=>"11521413625"
        ]);
    }
}
