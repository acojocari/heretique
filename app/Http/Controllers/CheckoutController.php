<?php

namespace App\Http\Controllers;

use App\OrderProduct;
use Illuminate\Http\Request;
//Add products to the cart
use Treestoneit\ShoppingCart\Facades\Cart;
//Add order model
use App\Order;


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

            //TODO Refactor : Better to have one single endpoint
            $total_order_amount = session()->has('coupon')
                ? ((Cart::subtotal()+Cart::tax()) - session()->get('coupon')['discount'])
                : (Cart::subtotal()+Cart::tax());

            //Send the user paiement to Stripe system
            $charge = \Stripe\Charge::create([
                'amount' => $total_order_amount * 100,
                'currency'=> 'eur',
                'description'=>'mon paiement',
                'source'=>$request->stripeToken,
                'receipt_email'=>$request->email,
                'metadata'=>[
                    'owner'=>$request->firstname.' '.$request->lastname,
                    'products'=>json_encode($products)
                    ]
                ]);

            //Once the user has payed the system will create his own order
            $order = Order::create([
                'user_id'=>auth()->user()->id,
                'paiement_firstname'=> $request->firstname,
                'paiement_lastname'=> $request->lastname,
                'paiement_number' => $request->number,
                'paiement_email'=> $request->email,
                'paiement_address' =>$request->address,
                'paiement_city' =>$request->city,
                'paiement_zip' =>$request->zip,
                'discount' =>session()->get('coupon')['name'] ?? null,
                'paiement_total' =>$total_order_amount
            ]);

            // dd($order);

            //Link the purchased items to the order
            foreach(Cart::content() as $item){
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item->buyable->id,
                    'quantity' => $item->quantity
                ]);
            }
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
