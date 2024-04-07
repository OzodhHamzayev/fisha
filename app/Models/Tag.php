<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
    ];
    public function shops(){
        return $this->belongsToMany(Shop::class,'shop_tags','tag_id','shop_id');
    }
}
