<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'sku',
        'category',
        'sub_categories',
        'brand',
        'stock_amount',
        'stock_type',
        'net_quantity',
        'quantity_type',
        'image',
        'active',
    ];
}
