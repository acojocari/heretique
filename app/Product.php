<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//To get started, add the Buyable interface to your model.
use Treestoneit\ShoppingCart\Buyable;
use Treestoneit\ShoppingCart\BuyableTrait;

class Product extends Model implements Buyable
{
    use BuyableTrait;

    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null){
        return $this->id;
    }
    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null) {
        return $this->name;
    }
    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null){
        return $this->price;
    }

    //voyageur relationship
    public function categoryId(){


        return $this->belongsTo('App\Category');

    }
    //get product category for app
    public function category(){

        return $this->belongsTo('App\Category');

    }
}
