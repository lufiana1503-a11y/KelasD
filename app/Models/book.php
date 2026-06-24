<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'writer',
        'release_date'
    ];

    protected function casts(){

    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function borrow(){
        return $this->hasMany(Borrow::class);
    }
}
