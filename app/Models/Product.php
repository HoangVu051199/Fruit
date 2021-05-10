<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'product';

    protected $fillable = [
        'category_id',
        'unit_id',
        'name',
        'slug',
        'image',
        'price',
        'origin',
        'description',
        'status',
    ];
}
