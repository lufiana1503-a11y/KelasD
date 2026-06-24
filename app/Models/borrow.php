<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class borrow extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'user_id',
        'book_id',
        'date_start',
        'date_end'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function Book(){
        return $this->belongsTo(Book::class);
    }

    }
