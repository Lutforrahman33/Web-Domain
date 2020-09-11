<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
     protected $fillable = [
        'title', 'email', 'url', 'shortdescription' , 'category_id' , ' subcategory_id',
    ];

    public function category(){
      return $this->belongsTo('App\Category');
    }

    public function subcategory(){
      return $this->belongsTo('App\Subcategory');
    }
}
