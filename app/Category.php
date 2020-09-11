<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function subcategory(){

       return $this->hasMany('App\Subcategory');
    }

    public function domain(){

       return $this->hasMany('App\Domain');
    }
}
