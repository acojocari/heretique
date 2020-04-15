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
Route::get('/cart','HomeController@cart')->name('cart.index');

//Checkout
Route::get('/checkout','HomeController@checkout')->name('checkout.index');
Route::get('/checkout/success','HomeController@success')->name('checkout.success');

//Orders
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
