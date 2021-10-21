<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixMoney extends Model
{
    use HasFactory;
    public $fillable=['Money'];
    public static function total(){
        $total=0;
        foreach (Wallet::all() as $key) {
            $total+=$key->balance;
        }
        return $total;
    }
}
