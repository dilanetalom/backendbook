<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'language',
        'image',
        'format',
        'niveau',
        'pub_date',
        'price',
        'user_id',
        'author_id',
    ];
}
