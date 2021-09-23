<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
                // \App\Models\User::factory(10)->create();
                $this->call(AccessTableSeeder::class);
                $this->call(UserTableSeeder::class);
                $this->call(WalletTableSeeder::class);
                $this->call(RfidTableSeeder::class);
                $this->call(CanteenTableSeeder::class);
    }
}
