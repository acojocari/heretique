<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Add products to the cart
use Treestoneit\ShoppingCart\Facades\Cart;
use App\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //dd(Cart::content());
        //dd(Cart::items());

        //Get the content of cart
        return view('cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        //Add to Cart Controller
        $product = Product::where('id',$request->id)->firstOrFail();  //TODO why a new request to BDD, is it possible to handle it using associate method ->associate('App\Product')?
        $quantity = 1; //TODO implement the qty item
        Cart::add($product, $quantity);

        return redirect()->route('cart.index')->with('success','Produit ajouté à votre panier !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Remove item per item form cart
        Cart::remove($id);
        return back()->with('success','Le produit a bien été supprimé du panier!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reset(){

        //Mass remove
        Cart::destroy();
    }
}
