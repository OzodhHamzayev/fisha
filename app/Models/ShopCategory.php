<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCategory extends Model
{
    use HasFactory;

    public $table = 'shop_category';
    public $fillable = [    
        'category_id',
        'shop_id',
    ];
} 