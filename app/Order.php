<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //Needed to save data in DDB
    protected $fillable = [
        'user_id', 'paiement_firstname', 'paiement_lastname', 'paiement_number', 'paiement_email', 'paiement_address',
        'paiement_city', 'paiement_zip', 'discount', 'paiement_total'
    ];

    //get the user orders
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Get the order items
    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity'); //TODO Print the SQL Query
    }


}
