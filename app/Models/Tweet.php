<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    // Kolonnen beschreibbar machen
    protected $fillable = [
        'title',
        'text',
        'date'
    ];
}
