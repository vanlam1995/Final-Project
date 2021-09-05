<?php

use Illuminate\Support\Facades\Route;

/* Không cần include controller vào cho dài dòng */

define('__BASEADMIN__', 'App\Http\Controllers\Admin');

define('__BASECLIENT__', 'App\Http\Controllers\Clients');

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


/* Clients */

Route::prefix('/')->group(function(){
    Route::get('/', ['as' => 'clients.index', 'uses' => __BASECLIENT__.'\HomeController@index']);
});


/* Admin */


Route::prefix('admin')->group(function(){

    Route::get('/', ['as' => 'clients.index', 'uses' => __BASEADMIN__.'\HomeController@index']);

});
