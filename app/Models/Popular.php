<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popular extends Model
{

    protected $fillable = [
        'desc',
        'cover',
        'date',
        'title',
        'catgeory',
    ];
    use HasFactory;
}