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
Route::get('/thuong-hieu/{brand_slug}','BrandRoom@show_brand_home');
Route::get('/chi-tiet/{room_id}','App\Http\Controllers\RoomController@details_room');

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
Route::get('/send-mail', 'HomeController@send_mail');

//Login facebook
Route::get('/login-facebook', 'AdminController@login_facebook');
Route::get('/admin/callback', 'AdminController@callback_facebook');

//Login google
Route::get('/login-google', 'AdminController@login_google');
Route::get('/google/callback', 'AdminController@callback_google');

Route::post('/save-category-room', 'App\Http\Controllers\CategoryRoom@save_category_room');
Route::post('/update-category-room/{category_room_id}', 'App\Http\Controllers\CategoryRoom@update_category_room');
Route::get('/delete-room/{room_id}', 'App\Http\Controllers\RoomController@delete_room');



//room
// Route::group(['middleware' => 'roles', 'roles'=>['admin','author']], function () {
Route::get('/add-room', 'App\Http\Controllers\RoomController@add_room');
Route::get('/edit-room/{room_id}', 'App\Http\Controllers\RoomController@edit_room');
// });
Route::get(
    'users',
    [
        'uses' => 'UserController@index',
        'as' => 'Users',
        'middleware' => 'roles'
        // 'roles' => ['admin','author']
    ]
);
Route::get('add-users', 'UserController@add_users');
Route::post('store-users', 'UserController@store_users');
Route::post('assign-roles', 'UserController@assign_roles');




Route::get('/all-room', 'App\Http\Controllers\RoomController@all_room');
Route::get('/unactive-room/{room_id}', 'App\Http\Controllers\RoomController@unactive_room');
Route::get('/active-room/{room_id}', 'App\Http\Controllers\RoomController@active_room');
Route::post('/save-room', 'App\Http\Controllers\RoomController@save_room');
Route::post('/update-room/{room_id}', 'App\Http\Controllers\RoomController@update_room');

//Coupon
Route::post('/check-coupon', 'CartController@check_coupon');

Route::get('/unset-coupon', 'CouponController@unset_coupon');
Route::get('/insert-coupon', 'CouponController@insert_coupon');
Route::get('/delete-coupon/{coupon_id}', 'CouponController@delete_coupon');
Route::get('/list-coupon', 'CouponController@list_coupon');
Route::post('/insert-coupon-code', 'CouponController@insert_coupon_code');

//Cart
Route::post('/update-cart-quantity', 'CartController@update_cart_quantity');
Route::post('/update-cart', 'CartController@update_cart');
Route::post('/save-cart', 'CartController@save_cart');
Route::post('/add-cart-ajax', 'CartController@add_cart_ajax');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/gio-hang', 'CartController@gio_hang');
Route::get('/delete-to-cart/{rowId}', 'CartController@delete_to_cart');
Route::get('/del-room/{session_id}', 'CartController@delete_room');
Route::get('/del-all-room', 'CartController@delete_all_room');

//Checkout
Route::get('/dang-nhap', 'CheckoutController@login_checkout');
Route::get('/del-fee', 'CheckoutController@del_fee');

Route::get('/logout-checkout', 'CheckoutController@logout_checkout');
Route::post('/add-customer', 'CheckoutController@add_customer');
Route::post('/order-place', 'CheckoutController@order_place');
Route::post('/login-customer', 'CheckoutController@login_customer');
Route::get('/checkout', 'CheckoutController@checkout');
Route::get('/payment', 'CheckoutController@payment');
Route::post('/save-checkout-customer', 'CheckoutController@save_checkout_customer');
Route::post('/calculate-fee', 'CheckoutController@calculate_fee');
Route::post('/select-delivery-home', 'CheckoutController@select_delivery_home');
Route::post('/confirm-order', 'CheckoutController@confirm_order');

//Order
Route::get('/delete-order/{order_code}', 'OrderController@order_code');
Route::get('/print-order/{checkout_code}', 'OrderController@print_order');
Route::get('/manage-order', 'OrderController@manage_order');
Route::get('/view-order/{order_code}', 'OrderController@view_order');
Route::post('/update-order-qty', 'OrderController@update_order_qty');
Route::post('/update-qty', 'OrderController@update_qty');


//Delivery
Route::get('/delivery', 'DeliveryController@delivery');
Route::post('/select-delivery', 'DeliveryController@select_delivery');
Route::post('/insert-delivery', 'DeliveryController@insert_delivery');
Route::post('/select-feeship', 'DeliveryController@select_feeship');
Route::post('/update-delivery', 'DeliveryController@update_delivery');

//Banner
Route::get('/manage-slider', 'SliderController@manage_slider');
Route::get('/add-slider', 'SliderController@add_slider');
Route::get('/delete-slide/{slide_id}', 'SliderController@delete_slide');
Route::post('/insert-slider', 'SliderController@insert_slider');
Route::get('/unactive-slide/{slide_id}', 'SliderController@unactive_slide');
Route::get('/active-slide/{slide_id}', 'SliderController@active_slide');
