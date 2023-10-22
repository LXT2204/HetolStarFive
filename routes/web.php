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
// Frontend
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index');
// Backend
Route::get('/admin_login', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');
Route::post('/admin_dashboard', 'App\Http\Controllers\AdminController@dashboard');
//Room
Route::get('/add-category-room', 'App\Http\Controllers\CategoryRoom@add_category_room');
Route::get('/edit-category-room/{category-room-id}', 'App\Http\Controllers\CategoryRoom@edit_category_room');
Route::get('/delete-category-room/{category-room-id}', 'App\Http\Controllers\CategoryRoom@delete_category_room');
Route::get('/all-category-room', 'App\Http\Controllers\CategoryRoom@all_category_room');
