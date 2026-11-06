<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_product';
    protected $fillable = [
        'name_product',
        'stock_product',
        'price_product',
        'desc_product',
        'id_category',
    ];
}
