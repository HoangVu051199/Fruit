<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'slider';

    protected $fillable = [
        'image',
        'position',
        'status',
    ];
}
