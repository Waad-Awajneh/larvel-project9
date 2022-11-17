<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lifestyle extends Model
{

    protected $fillable = [
        'cover',
        'date',
        'title',
        'catgeory',

    ];

    use HasFactory;
}