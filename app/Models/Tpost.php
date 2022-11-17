<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpost extends Model
{
    protected $fillable = [
        'cover',
        'title',

    ];
    use HasFactory;
}