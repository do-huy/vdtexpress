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
// Route::get('index','vdtcontroller@page');

Route::get('/', [
    'as' => 'master', 
    'uses' => 'vdtcontroller@page'
]);
Route::get('pricelist',[
	'as' => 'price',
	'uses' => 'vdtcontroller@price'
]);
Route::get('introduce',[
	'as' => 'introduce',
	'uses' => 'vdtcontroller@Indexintroduce'
]);
Route::get('Formorder',[
	'as' => 'form',
	'uses' => 'vdtcontroller@Indexform'
]);

Route::get('Admincp',[
	'as' => 'admins',
	'uses' => 'MainController@admin'
]);

Route::post('Admincp/checklogin',[
	'as' => 'check',
	'uses' => 'MainController@checklogin'
]);


Route::get('Admincp/successlogin',[
	'as' => 'success',
	'uses' => 'MainController@successlogin'
]);

Route::get('Admincp/logout',[
	'as' => 'out',
	'uses' => 'MainController@logout'
]);

Route::get('Register',[
	'as' => 'reg',
	'uses' => 'DropdownController@regis'
]);

Route::post('/insert/register',[
	'as' => 'insertreg',
	'uses' => 'MainController@insertregister'
]);
// Route::get('get-state-list/{proviceId}','DropdownController@getStateList');
Route::get('get-state-list/{proviceId}',[
	'as' => 'district',
	'uses' => 'DropdownController@getStateList'
]);
Route::get('get-ward-list/{districtId}',[
	'as' => 'ward',
	'uses' => 'DropdownController@getWardList'
]);


Route::get('index',[
	'as' => 'adminsssss',
	'uses' => 'adminController@index'
]);

Route::resource('manage_accounts', 'ManageAccountsController',
                ['only' => ['index', 'store', 'update']]);