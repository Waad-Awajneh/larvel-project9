<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppost extends Model
{
    protected $fillable = [
        'cover',
        'date',
        'title',
        'catgeory',

    ];
    use HasFactory;
}