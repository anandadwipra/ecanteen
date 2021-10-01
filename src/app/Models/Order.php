<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['food_list','total','canteen_id','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function canteen(){
        return $this->belongsTo(Canteen::class);
    }
}
