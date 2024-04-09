<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'post_id',
        'user_id',
    ];
    public function user(){
        return $this->hasOne(User::class,'id', 'user_id');
    }
    public function shop(){
        return $this->hasOne(Shop::class, 'id', 'shop_id');
    }
}
