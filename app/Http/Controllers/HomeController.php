<?php

namespace App\Http\Controllers;

use App\Product;
use App\OrderProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $array = [];

        //News
        $news = Product::take(2)->get();

        //Latest products
        $lastestProducts = Product::orderBy('id', 'DESC')->take(8)->get();

        //Best Sellers
        $orders = OrderProduct::all()->groupBy('product_id');

        foreach ($orders as $order) {
            foreach ($order as $product) {
                array_push($array, $product->product_id);
            }
        }
        $bestSellers = Product::whereIn('id', $array)->take(8)->get();

        return view('home',[
            'lastestProducts' => $lastestProducts,
            'news' => $news,
            'bestSellers' => $bestSellers
        ]);
    }

    public function orders()
    {

        $user = auth()->user();
        // TODO Might be more logical to create a controller for orders only
        return view('orders', [
            'orders' => $user->orders
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
