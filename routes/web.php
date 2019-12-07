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


Auth::routes();
//for frontend
Route::get('/', 'frontendController@index');
Route::get('/category-product/{id}', 'frontendController@categoryproduct')->name('category-product');
Route::get('/brand-product/{id}', 'frontendController@brandproduct')->name('brand-product');
Route::get('/login-signup', 'visitorController@index')->name('login-signup');
Route::post('/new-signup', 'visitorController@newsignup')->name('new-signup');
Route::post('/new-login', 'visitorController@newlogin')->name('new-login');
Route::post('/visitor-logout', 'visitorController@visitorlogout')->name('visitor-logout');








//----------------------------------0------------------------------
// for admin panel-------------------

Route::get('/home', 'HomeController@index')->name('home');

//for category information
Route::get('/add-category', 'categoryController@addcategory')->name('add-category');
Route::post('/save-category', 'categoryController@savecategory')->name('save-category');
Route::get('/manage-category', 'categoryController@managecategory')->name('manage-category');
Route::get('/edit-category/{id}', 'categoryController@editcategory')->name('edit-category');
Route::post('/update-category', 'categoryController@updatecategory')->name('update-category');
Route::get('/delete-category/{id}', 'categoryController@deltecategory')->name('delete-category');

//for brand information
Route::get('/add-brand', 'brandController@addbrand')->name('add-brand');
Route::post('/save-brand', 'BrandController@savebrand')->name('save-brand');
Route::get('/manage-brand', 'BrandController@managebrand')->name('manage-brand');
Route::get('/edit-brand/{id}', 'brandController@editbrand')->name('edit-brand');
Route::post('/update-brand', 'brandController@updatebrand')->name('update-brand');
Route::get('/delete-brand/{id}', 'brandController@deletebrand')->name('delete-brand');

//for product information
Route::get('/add-product', 'productController@addproduct')->name('add-product');
Route::post('/save-product', 'productController@saveproduct')->name('save-product');
Route::get('/manage-product', 'productController@manageproduct')->name('manage-product');
Route::get('/delete-product/{id}', 'productController@deleteproduct')->name('delete-product');
Route::get('/edit-product/{id}', 'productController@editproduct')->name('edit-product');
Route::post('/update-product', 'productController@updateproduct')->name('update-product');


