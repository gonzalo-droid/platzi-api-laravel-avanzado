<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // para q se puedan cear productos con cualquier atributo
    protected $guarded = [];
}
