<?php

namespace Database\Seeders;

use App\Models\Canteen;
use Illuminate\Database\Seeder;

class CanteenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Canteen::create([
            'name'=>'Warteg Wareg',
            'user_id'=>'2',
            'makanan'=>1,
            'minuman'=>1,
            'image'=>'image/canteen/canteen.png',
            // 'image'=>'canteen.png',
        ]);
        Canteen::create([
            'name'=>'Kantin Bapak',
            'user_id'=>'5',
            'makanan'=>1,
            'minuman'=>0,
            'image'=>'image/canteen/QT2BnJQnKlRO66fbrvlIvYwr2JuW9rk5cBbkL4Jz.png',
            // 'image'=>'canteen.png',
        ]);
    }
}
