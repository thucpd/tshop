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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[
    'uses' =>'Controller@getView',
    'as' => '/'
]);
Route::get('cart','CartController@getCart');
Route::get('contact','ContactController@getContact');
Route::get('checkout','CheckoutController@getCheckout');
Route::get('user-login',[
    'uses'=>'LoginController@getLogin',
    'as' =>'user_login'
]);
Route::post('user-login',[
    'uses'=>'LoginController@postLogin',
    'as' =>'user_login'
]);
Route::get('user-register',[   
    'uses' => 'LoginController@getRegister',
    'as' => 'user_register'
    ]);
Route::post('user-register',[   
    'uses' => 'LoginController@postRegister',
    'as' => 'user_register'
    ]);
Route::get('about',[
    'uses' => 'Controller@getAbout',
    'as' => 'about'
]);
Route::get('cart',[
    'uses' => 'Controller@getCart',
    'as' => 'cart'
]);
Route::get('contact',[
    'uses' => 'Controller@getContact',
    'as' => 'contact'
]);
Route::get('checkout',[
    'uses' => 'Controller@getCheckOut',
    'as' => 'checkout'
]);
Route::group(['prefix' =>'admin'],function(){
    Route::get('/index',[
        'uses' => 'AdminController@getView',
        'as' => 'index'
    ]);
    Route::get('/login',[
        'uses'=>'AdminController@getLogin',
        'as' =>'admin_login'
    ]);
    Route::post('/login',[
        'uses'=>'AdminController@postLogin',
        'as' =>'admin_login'
    ]);
    Route::get('/product',[
        'uses'=> 'AdminController@getProduct',
        'as' =>'product'
    ]);
    Route::post('/product',[
        'uses'=> 'AdminController@postProduct',
        'as' =>'product'
    ]);
    Route::get('/user', [
        'uses'=> 'AdminController@getu\User',
        'as' =>'user'
    ]);
}
);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
