<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Canteen extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable=['name','slug','image','makanan','minuman','user_id'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function food(){
        return $this->hasMany(Food::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
