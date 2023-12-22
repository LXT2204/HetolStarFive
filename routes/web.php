<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/danh-muc/{category_id}','App\Http\Controllers\CategoryRoom@show_category_home');
Route::get('/chi-tiet/{room_id}','App\Http\Controllers\RoomController@details_room');
Route::post('/tim-kiem-khoang-tien','App\Http\Controllers\HomeController@search_price');


// Frontend
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index');
// BackendRoute::get('/edit-category-room/{categor_id}', 'App\Http\Controllers\CategoryRoom@edit_category_room');
Route::get('/edit-category-room/{category_id}', 'App\Http\Controllers\CategoryRoom@edit_category_room');
Route::get('/admin_login', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');
Route::post('/admin_dashboard', 'App\Http\Controllers\AdminController@dashboard');
//Room
Route::get('/add-category-room', 'App\Http\Controllers\CategoryRoom@add_category_room');
Route::get('/delete-category-room/{category_id}', 'App\Http\Controllers\CategoryRoom@delete_category_room');
Route::get('/all-category-room', 'App\Http\Controllers\CategoryRoom@all_category_room');


Route::post('/export-csv', 'App\Http\Controllers\CategoryRoom@export_csv');
Route::post('/import-csv', 'App\Http\Controllers\CategoryRoom@import_csv');


Route::get('/unactive-category-room/{category_id}', 'App\Http\Controllers\CategoryRoom@unactive_category_room');
Route::get('/active-category-room/{category_id}', 'App\Http\Controllers\CategoryRoom@active_category_room');

//Send Mail


Route::post('/save-category-room', 'App\Http\Controllers\CategoryRoom@save_category_room');
Route::post('/update-category-room/{category_room_id}', 'App\Http\Controllers\CategoryRoom@update_category_room');
Route::get('/delete-room/{room_id}', 'App\Http\Controllers\RoomController@delete_room');



//room
// Route::group(['middleware' => 'roles', 'roles'=>['admin','author']], function () {
Route::get('/add-room', 'App\Http\Controllers\RoomController@add_room');
Route::get('/edit-room/{room_id}', 'App\Http\Controllers\RoomController@edit_room');
// });

Route::get('add-users', 'App\Http\Controllers\UserController@add_users');
Route::post('/save-user', 'App\Http\Controllers\UserController@save_user');
Route::get('/users', 'App\Http\Controllers\UserController@all_user');
Route::get('/edit-user/{customer_id}', 'App\Http\Controllers\UserController@edit_user');
Route::post('/update-user/{customer_id}', 'App\Http\Controllers\UserController@update_user');
Route::get('/delete-user/{customer_id}', 'App\Http\Controllers\UserController@delete_user');
Route::post('/tim-kiem','App\Http\Controllers\HomeController@search');




Route::get('/all-room', 'App\Http\Controllers\RoomController@all_room');
Route::get('/unactive-room/{room_id}', 'App\Http\Controllers\RoomController@unactive_room');
Route::get('/active-room/{room_id}', 'App\Http\Controllers\RoomController@active_room');
Route::post('/save-room', 'App\Http\Controllers\RoomController@save_room');
Route::post('/update-room/{room_id}', 'App\Http\Controllers\RoomController@update_room');



//Cart
Route::post('/update-cart-quantity-checkin', 'App\Http\Controllers\CartController@update_cart_quantity_checkin');
Route::post('/update-cart-quantity-checkout', 'App\Http\Controllers\CartController@update_cart_quantity_checkout');

Route::post('/save-cart', 'App\Http\Controllers\CartController@save_cart');
Route::post('/add-cart-ajax', 'CartController@add_cart_ajax');
Route::get('/show-cart', 'App\Http\Controllers\CartController@show_cart');
Route::get('/gio-hang', 'CartController@gio_hang');
Route::get('/delete-to-cart/{rowId}', 'App\Http\Controllers\CartController@delete_to_cart');


//Checkout
Route::get('/login-checkout', 'App\Http\Controllers\CheckoutController@login_checkout');


Route::get('/logout-checkout', 'App\Http\Controllers\CheckoutController@logout_checkout');
Route::post('/add-customer', 'App\Http\Controllers\CheckoutController@add_customer');
Route::post('/order-place', 'App\Http\Controllers\CheckoutController@order_place');
Route::post('/login-customer', 'App\Http\Controllers\CheckoutController@login_customer');
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@checkout');
Route::get('/payment', 'App\Http\Controllers\CheckoutController@payment');
Route::post('/save-checkout-customer', 'App\Http\Controllers\CheckoutController@save_checkout_customer');


//Order

Route::get('/manage-order', 'App\Http\Controllers\OrderController@manage_order');
Route::get('/view-order/{order_id}', 'App\Http\Controllers\OrderController@view_order');
Route::post('/accept/{order_id}', 'App\Http\Controllers\OrderController@accept');
Route::post('/refuse/{order_id}', 'App\Http\Controllers\OrderController@refuse');
Route::post('/refuse-user/{order_id}', 'App\Http\Controllers\CheckoutController@refuse_user');

Route::get('/delete-order/{order_id}', 'App\Http\Controllers\OrderController@delete_order');
//User
Route::get('/cart/{customer_id}', 'App\Http\Controllers\CheckoutController@show_cart');
Route::get('/user/{customer_id}', 'App\Http\Controllers\CheckoutController@edit_customer');
Route::post('/update-customer/{customer_id}', 'App\Http\Controllers\CheckoutController@update_user');