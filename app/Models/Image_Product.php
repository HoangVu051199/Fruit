<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'image_product';

    protected $fillable = [
        'product_id',
        'image',
    ];
}