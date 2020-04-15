<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //voyageur relationship
    public function categoryId(){


        return $this->belongsTo('App\Category');

    }
    //get product category for app
    public function category(){

        return $this->belongsTo('App\Category');

    }
}
