<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/contact', function () {
    return view('/contacts.contact');
});
Route::get('/contact/conf', function () {
    return view('/contacts.contact_conf');
});

Route::get('/contact/submit', function () {
    return view('/contacts.contact_submit');
});
Route::get('/contact/list', function () {
    return view('/contacts.contact_list');
});
Route::get('/contact/view', function () {
    return view('/contacts.contact_view');
});
Route::get('/profile', function () {
    return view('/profile');
});

Route::get('/index','ContactController@index');

Route::get('/admin/dashboard', function () {
    return view('/admin.dashboard');
});

Route::get('/admin/userList', function () {
    return view('/admin.user_list');
});
Route::get('/admin/resturantList', function () {
    return view('/admin.restaurant_list');
});

Route::get('/admin/addRestaurant', function () {
    return view('/admin.add_restaurant');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','Admin\RestaurantController@indexhome'); 

Route::get('/admin/restaurantList','Admin\RestaurantController@index'); 
Route::get('/admin/userList','Admin\UserListController@index'); 


Route::post('/admin/addRestaurant', 'Admin\RestaurantController@store');


Route::resource('admin', 'Admin\RestaurantController');