<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class World extends Model
{


    protected $fillable = [
        'time',
        'authorName',
        'title',
        'catgeory',
        'cover',
        "desct",
        "descb"

    ];
    use HasFactory;
}
