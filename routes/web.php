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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::get('/about', 'aboutController@index')->name('about.index');





Route::get('/event', 'EventController@index')->name('event.index');

Route::get('/event/show/{ticket}', 'EventController@show')->name('event.Show');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{ticket}', 'CartController@destroy')->name('cart.destroy');
Route::get('empty',function (){
    Cart::destroy();

});
Route::get('/checkout','CheckoutController@index')->name('checkout.index');






Auth::routes();

Route::get('/tickets','TicketController@index')->name('tickets.index');
Route::get('/tickets/create','TicketController@create')->name('tickets.create');

Route::post('/tickets/create','TicketController@store')->name('tickets.store');


Route::get('/tickets/delete/{ticket}','TicketController@delete')->name('tickets.delete');
Route::post('/tickets/{ticket}','TicketController@update')->name('tickets.update');

Route::post('/tickets/delete/{ticket}','TicketController@destroy')->name('tickets.destroy');

Route::get('/tickets/{ticket}','TicketController@show')->name('tickets.show');
