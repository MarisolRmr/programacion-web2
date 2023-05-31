<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'short_description',
        'long_description',
        'sale_price',
        'purchase_price',
        'stock',
        'product_id',
        'fecha',
        'peso',
    ];
}
