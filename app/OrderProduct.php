<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    //Needed to save data in BDD TODO To Check Laravel Doc
    protected $fillable = [
        'order_id', 'product_id', 'quantity'
    ];
}
