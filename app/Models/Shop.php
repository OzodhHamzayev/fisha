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
    public function tags(){
        return $this->belongsToMany(Tag::class, 'shop_tags','shop_id', 'tag_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class, 'shop_id', 'id');
    }
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function categories(){
        return $this->belongsToMany(Category::class, 'shop_category', 'category_id' ,'shop_id');
    }
}
