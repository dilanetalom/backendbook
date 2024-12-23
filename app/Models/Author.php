<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'gender',
        'country',
        'imageauthor',
        'description',
        'date_nais',
        'email',
    ];

    protected $dates = ['deleted_at'];

    // MyApp Personal Access Client
}
