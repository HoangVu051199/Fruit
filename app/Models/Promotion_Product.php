<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion_Product extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $table='promotion_product';

    protected $fillable=[
        'product_id',
        'start',
        'finish',
        'status',
    ];
}
