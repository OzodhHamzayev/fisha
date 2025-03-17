<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
     ];
   public function shops(){
        return $this->belongsToMany(Shop::class, 'shop_category', 'shop_id', 'category_id');
    }
    
}
