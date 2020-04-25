<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Get the right coupon
        $coupon = Coupon::where('code',$request->coupon)->first();
        if(!$coupon) return redirect()->route('checkout.index')->withErrors('Invalid coupon. Please try again');

        //Add the coupon into session
        session()->put('coupon',[
            'name' => $coupon->code,
            'discount' => $coupon->value
        ]);
        return redirect()->route('checkout.index')->with('success','Coupon has been applied');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //remove the coupon
        session()->forget('coupon');
        return redirect()->route('checkout.index')->with('success','Coupon has been removed');
    }
}
