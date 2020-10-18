<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // para q se puedan cear productos con cualquier atributo
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //product un user
    public function createdBy(){
        return $this->belongsTo(User::class);
    }
}
