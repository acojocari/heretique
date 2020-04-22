<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
 * Get home page using a controller
 * Route::get('/', function () {
    return view('welcome');
});
 */

//phpinfo
Route::get('/phpinfo','HomeController@phpinfo')->name('phpinfo');

//main page
Route::get('/','HomeController@home')->name('home');

//shop
Route::get('/shop','ShopController@index')->name('shop.index');
Route::get('/shop/{product}','ShopController@show')->name('shop.show');

//contact page
Route::get('/contact','HomeController@contact')->name('contact');

//cart product
Route::get('/cart','CartController@index')->name('cart.index'); //Get all added items in the cart
Route::post('/cart','CartController@store')->name('cart.store'); //Add to Cart
Route::get('/cart/reset','CartController@reset')->name('cart.reset'); //Dev Route for mass remove
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy'); //Remove item per item

//checkout
Route::get('/checkout','HomeController@checkout')->name('checkout.index');
Route::get('/checkout/success','HomeController@success')->name('checkout.success');

//orders
Route::get('/orders','HomeController@orders')->name('orders');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//AUthentification
Auth::routes();

Route::get('/logout',function(){
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');
