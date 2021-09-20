<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Rfid extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'user_id',
        'rfid',
    ];
    public function wallet(){
        return $this->belongsTo(Wallet::class);
    }
    public function user(){
        return $this->HasOneThrough(User::class, Wallet::class,'id','id');
    }
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
}
