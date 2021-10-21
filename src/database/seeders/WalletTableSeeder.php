<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Seeder;

class WalletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wallet::create([
            'address'=>'A4S5RR874',
            'user_id'=>1,
            'balance'=>'500.000'
        ]);
        Wallet::create([
            'address'=>'AD587WFR',
            'user_id'=>2,
            'balance'=>'200.000'
        ]);
        Wallet::create([
            'address'=>'F478TY4F',
            'user_id'=>3,
            'balance'=>'150.000'
        ]);
        Wallet::create([
            'address'=>'Q477ERT7',
            'user_id'=>4,
            'balance'=>'100.000'
        ]);
        Wallet::create([
            'address'=>'D47AZRT7',
            'user_id'=>5,
            'balance'=>'50.000'
        ]);
    }
}
