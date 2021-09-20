<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acces extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'name',
        'slug',
    ];
    public function users(){
        return $this->hasMany(User::class,'access_id');
    }
}
