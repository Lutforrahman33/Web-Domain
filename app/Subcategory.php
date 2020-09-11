<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'subcategoryname'
    ];


    public function category(){

       return $this->belongsTo('App\Category');
    }

    public function domain(){

       return $this->hasMany('App\Domain');
    }
}
