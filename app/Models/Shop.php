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
        'category_id',
        'user_id',
        'comment_id'
        
    ];
    public function category(){
        return $this->hasOne(Category::class, 'id','category_id');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, 'shop_tags','shop_id', 'tag_id');
    }
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
