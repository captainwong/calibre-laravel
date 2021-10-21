<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'pubdate',
        'series_index',
        'isbn',
        'path',
        'has_cover',
    ];

    protected $casts = [
        'pubdate' => 'datetime',
    ];
}
