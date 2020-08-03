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

Route::get('/','HomeController@inde');

Auth::routes();

Route::get('/home', 'HomeController@inde')->name('home');

Route::get('/product_by_category/{category_id}','HomeController@show_product_by_category');
Route::get('/view_product/{product_id}','HomeController@show_product_details_by_id');

// Route::get('/login','SessionController@create');
// Route::post('/login','SessionController@store');

Route::get('/admin','AdminController@show_dashboard');
Route::get('/admin','AdminController@all_order_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');


Route::get('/password/reset/{token?}','Auth/ForgotPasswordController@showResetForm');
Route::post('forget_password','Auth/ForgotPasswordController@password');
// Route::post('forget_password','Auth/ForgotPasswordController@sendEmail');


Route::post('/admin-dashboard','AdminController@dashboard');


//category
Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');
Route::post('/edit-category/{category_id?}','CategoryController@edit_category');
Route::post('/update-category','CategoryController@update_category');
Route::get('/product_by_category/{category_id}','HomeController@show_product_by_category');
Route::get('/unactive_category/{category_id}','CategoryController@unactive_category');
Route::get('/active_category/{category_id}','CategoryController@active_category');
Route::get('/edit-category/{category_id}','CategoryController@edit_category');
Route::post('/update-category/{category_id}','CategoryController@update_category');
Route::get('/delete_category/{category_id}','CategoryController@delete_category');

//brand
Route::get('/add-brand','BrandController@index');
Route::get('/all-brand','BrandController@all_brand');
Route::post('/save-brand','BrandController@save_brand');
Route::post('/edit-brand/{brand_id?}','BrandController@edit_brand');
Route::post('/update-brand','BrandController@update_brand');
Route::get('/unactive_brand/{brand_id}','BrandController@unactive_brand');
Route::get('/active_brand/{brand_id}','BrandController@active_brand');
Route::get('/edit_brand/{brand_id}','BrandController@edit_brand');
Route::post('/update-brand/{brand_id}','BrandController@update_brand');
Route::get('/delete_brand/{brand_id}','BrandController@delete_brand');

//product
Route::get('/add-product','ProductController@index');
Route::get('/all-product','ProductController@all_product');
Route::post('/save-product','ProductController@save_product');
Route::get('/unactive_product/{product_id}','ProductController@unactive_product');
Route::get('/active_product/{product_id}','ProductController@active_product');
Route::get('/edit_product/{product_id}','ProductController@edit_product');
Route::post('/update-product/{product_id}','ProductController@update_product');
Route::get('/delete_product/{product_id}','ProductController@delete_product');

//slider
Route::get('/add-slider','SliderController@index');
Route::get('/all-slider','SliderController@all_slider');
Route::post('/save-slider','SliderController@save_slider');
Route::get('/unactive_slider/{id_slider}','SliderController@unactive_slider');
Route::get('/active_slider/{id_slider}','SliderController@active_slider');
Route::get('/edit_slider/{id_slider}','SliderController@edit_slider');
Route::post('/update-slider/{id_slider}','SliderController@update_slider');
Route::get('/delete_slider/{id_slider}','SliderController@delete_slider');


//order
Route::get('/all-order','OrderController@all_order');
Route::post('/save-order','OrderController@save_order');
Route::get('/edit_order/{order_id}','OrderController@edit_order');
Route::post('/update-order/{order_id}','OrderController@update_order');
Route::get('/delete_order/{order_id}','OrderController@delete_order');
Route::post('/details_order/{order_id}','OrderController@details_order');
Route::get('/thanks','OrderController@thanks');

//search

Route::get('/all_car','SearchController@search_index');
Route::get('/search','SearchController@search_by_product');
Route::get('/contact','SearchController@contact');	

//parameter

Route::get('/add-parameter','ParameterController@index');
Route::post('/save_info','ParameterController@save_info');


//wiauto

Route::get('/wiauto','WiautoController@index');
Route::get('/wiauto/checkout','WiautoController@checkout');
Route::get('/wiauto/alwakalat','WiautoController@agency');
Route::get('/wiauto/alcar','WiautoController@alcar');
Route::get('/wiauto/privacy','WiautoController@privacy');
Route::get('/wiauto/condition','WiautoController@condition');
Route::get('/wiauto/product_by_brand/{brand_id}','WiautoController@show_product_by_brand');
Route::get('/wiauto/agence-city/{id_info}','WiautoController@show_agence_by_city');
Route::get('/wiauto/contact','WiautoController@contact');
Route::post('sendemail/send','WiautoController@sendemail');
Route::get('/wiauto/login','AdminWiautoController@index');
Route::get('/wiauto/admin','AdminWiautoController@show_dashboard');
Route::post('/admin-dashboard','AdminWiautoController@dashboard');
Route::post('/wiauto/alwakalat/search','WiautoController@search')->name('search');
Route::get('/wiauto/agen','WiautoController@productsCat');

