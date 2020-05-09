<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = 3;

        if (request()->category) {
            //if the category has been send by the route.index from shop.blade then will select all product having this category
            $category = Category::where('slug', request()->category)->firstOrFail();
            $products = Product::where('category_id', $category->id);
            //dd($products);
        } else {
            $products = Product::take(6);
        }

        //Item sort by price & pagination
        if (request()->sort == 'asc') {
            $products = $products->orderBy('price')->paginate($paginate);
        } elseif (request()->sort == 'desc') {
            $products = $products->orderBy('price', 'DESC')->paginate($paginate);
        } else {
            //Define the number of items to display per page
            $products = $products->paginate($paginate);
        }

        //Get all categories to display them in the filter
        $categories = Category::all();
        return view('shop',[
            'products'=>$products,
            'categories'=>$categories
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        //$category = Category::where('id',$product->category_id)->firstOrFail();
        //get one product
        return view('product',[
            'product'=>$product
          //  'category'=>$category
        ]);
    }
}
