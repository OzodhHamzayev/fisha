<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    public $fillable = [
        'title',
        'information',
        'money',
        'cheap_price',
        'weight',
        'clothes',
        'category_id'
    ];
    public function category(){
        return $this->hasOne(Category::class, 'id','category_id');
    }
}
