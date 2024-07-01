<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bucket extends Model
{
    protected $fillable = ['name', 'images'];
    protected $casts = [
        'images' => 'array',
    ];
    use HasFactory;
}
