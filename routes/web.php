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

Route::get('/cart',[ 
 'uses'=>'ProductController@getCart',
 'as'=>'getCart'
]);

Route::get('/add-to-cart{id}',[
  'uses'=>'ProductController@AddToCart',
  'as'=>'product.cart'
]);

Route::get('/shop',[
   'uses'=>'ProductController@getShop',
   'as'=>'product.index',
   'middleware'=>'auth'    
]);


Route::get('/register',[
  'uses'=>'UserController@getRegister',
  'as'=>'user.getRegister',
  
]);

Route::post('/register',[
 'uses'=>'UserController@postRegister',
 'as'=>'user.register',
 
]);

Route::get('/login',[
 'uses'=>'UserController@getLogin',
 'as'=>'user.getLogin',
 
]);

Route::post('login',[
 'uses'=>'UserController@postLogin',
 'as'=>'user.login',
 
]);

Route::get('/logout',[
 'uses'=>'UserController@Logout',
 'as'=>'user.logout',
 'middleware'=>'auth'
]);

Route::get('/orders',[
 'uses'=>'UserController@getOrders',
 'as'=>'user.orders'
]);

Route::get('/address',[
 'uses'=>'UserController@getAddress',
 'as'=>'user.getAddress'
]);

Route::post('/address',[
  'uses'=>'UserController@postAddress',
  'as'=>'user.postAddress'
 ]);


 Route::get('/admin',[
  'uses'=>'AdminController@getServices',
  'as'=>'admin.services'   
 ]);

 Route::get('/addProduct',[
   'uses'=>'AdminController@getAddProduct',
   'as'=>'admin.getAddProduct'
 ]);

 Route::post('/addProduct',[
  'uses'=>'AdminController@postAddProduct',
  'as'=>'admin.postAddProduct'
 ]);

 Route::get('/deleteProduct/{id}',[
 'uses'=>'AdminController@DeleteProduct',
 'as'=>'admin.deleteProduct'
 ]);

Route::get('/users',[
 'uses'=>'AdminController@getUsers',
 'as'=>'admin.getUsers'
]);

Route::get('/adminGetEmp',[
 'uses'=>'AdminController@getEmployee',
 'as'=>'admin.getEmployee'
]);

Route::get('/adminOrders',[
 'uses'=>'AdminController@getOrders',
 'as'=>'admin.getOrders'
]);

Route::get('/addEmployee',[
 'uses'=>'EmployeeController@getAddEmployee',
 'as'=>'admin.getAddEmployee'
]);

Route::post('/addEmployee',[
  'uses'=>'EmployeeController@postAddEmployee',
  'as'=>'admin.postAddEmployee'
 ]);





