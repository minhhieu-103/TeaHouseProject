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



//Route::post('/contact','PageController@postcontact')->name('contact1');


Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group( function () {
        Route::name('admin.')->group( function () {
            Route::resource('/','AdminController');
            Route::resource('/products', 'ProductController');
            Route::resource('/category', 'CategoryController');
            Route::resource('/users', 'UserController');
            Route::resource('/customers', 'CustomerController');


        });
    });
});

route::get('/login/customer', 'UserController@getLogin');
route::get('/register/customer','UserController@getRegister');
route::post('/register/customer', 'UserController@postRegister');

route::post('/logout/customer', 'UserController@getlogout');
route::post('/login/customer', 'UserController@postLogin');
Route::get('products/search','ProductController@search');
Route::get('/search','ProductsController@search');


Route::get('/customers/{action}/{id}', 'CustomerController@getAction')->name('customer.action');

/* hommmmeee */
Route::get('/','PageController@index');
Route::get('/introduce','PageController@introduce')->name('gioi-thieu');
Route::get('/new','PageController@news')->name('tin-tuc');
Route::get('/menu','PageController@menu')->name('thuc-don');
Route::get('/contact','PageController@contact')->name('lien-he');
/* hommmmeee */
Route::resource('/details', 'DetailProductController');
Route::resource('/products', 'ProductsController');

//Route::resource('/checkout', 'CheckoutController');

//Route::resource('/account', 'AccountController');
//Route::get('/account/orders', 'AccountController@ordersaccount');

Route::prefix('account')->group( function () {
    Route::name('account.')->group( function () {
        Route::get('/', 'AccountController@index')->name('index');
        Route::get('/orders', 'AccountController@accountorders')->name('accountorders');
        Route::get('/orders/{id}', 'AccountController@getordersaccount')->name('getordersaccount');
        Route::get('/address', 'AccountController@address')->name('address');


    });
});


/* cart-checkout*/
Route::get('/add-to-cart/{id}','ProductsController@addToCart')->name('add-cart');
Route::get('/cart','ProductsController@cart')->name('cart')  ;
Route::get('/cart/update/{id}','ProductsController@updatecart')->name('update-cart')  ;
Route::get('/cart/remove/{id}','ProductsController@removeFromCart')->name('remove');
Route::get('/cart/destroy','ProductsController@cartdestroy')->name('destroy');
/* checkout*/
Route::get('/checkout', 'CheckoutController@getCheckOut');
Route::post('/checkouts', 'CheckoutController@postCheckOut');
