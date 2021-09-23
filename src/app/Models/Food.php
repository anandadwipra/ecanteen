<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Food extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable=['name','slug','image','price','stock','jenis','canteen_id'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function canteen(){
        return $this->belongsTo(Canteen::class);
    }
}
