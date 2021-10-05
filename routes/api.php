<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\AssemblyController;
use App\Http\Controllers\ProductController;

Route::get('factories', 'App\Http\Controllers\FactoryController@index');
Route::get('factories/{factory}', 'App\Http\Controllers\FactoryController@show');
Route::post('factories', 'App\Http\Controllers\FactoryController@store');
Route::put('factories/{factory}', 'App\Http\Controllers\FactoryController@update');
Route::delete('factories/{factory}', 'App\Http\Controllers\FactoryController@delete');

Route::get('assemblies', 'App\Http\Controllers\AssemblyController@index');
Route::get('assemblies/{assembly}', 'App\Http\Controllers\AssemblyController@show');
Route::post('assemblies', 'App\Http\Controllers\AssemblyController@store');
Route::put('assemblies/{assembly}', 'App\Http\Controllers\AssemblyController@update');
Route::delete('assemblies/{assembly}', 'App\Http\Controllers\AssemblyController@delete');

Route::get('products', 'App\Http\Controllers\ProductController@index');
Route::get('products/{product}', 'App\Http\Controllers\ProductController@show');
Route::post('products', 'App\Http\Controllers\ProductController@store');
Route::put('products/{product}', 'App\Http\Controllers\ProductController@update');
Route::delete('products/{product}', 'App\Http\Controllers\ProductController@delete');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
