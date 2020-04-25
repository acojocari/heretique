<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Add products to the cart
use Treestoneit\ShoppingCart\Facades\Cart;


class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //manage the payment
    public function checkout(){
        return view('checkout');
    }

    public function store(Request $request){

        //prepare the description cart for seding to stripe
        foreach(Cart::content() as $item){
            $products[]= $item->buyable->name;
        }
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        try{
            $charge = \Stripe\Charge::create([
                'amount' => session()->has('coupon')
                    ? ((Cart::subtotal()+Cart::tax()) - session()->get('coupon')['discount'])*100
                    : (Cart::subtotal()+Cart::tax())*100, //TODO Refactor : Better to have one single endpoint
                'currency'=> 'eur',
                'description'=>'mon paiement',
                'source'=>$request->stripeToken,
                'receipt_email'=>$request->email,
                'metadata'=>[
                    'owner'=>$request->firstname.' '.$request->lastname,
                    'products'=>json_encode($products)
                    ]
                ]);

            return redirect()->route('checkout.success')->with('success','Paiment has been accepted!');
        }
        catch (\Stripe\Exception\CardErrorException $e){
            throw $e;
        }
    }

    //get succes if payment ok
    public function success(){
        if(!session()->has('success')){
            return redirect()->route('home');
        }

        //Clean up the cart if success
        Cart::destroy();

        //Clean up the coupon session if success
        session()->forget('coupon');

        return view('success');
    }
}
