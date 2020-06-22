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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('profile', 'UserController@getAuthenticatedUser');
Route::post('tipoproduto', 'TipoProdutoController@store');
Route::get('tipoproduto', 'TipoProdutoController@index');
Route::delete('tipoproduto', 'TipoProdutoController@destroy');

Route::resource('produtos', 'ProdutosController');
Route::resource('vendedores', 'VendedoresController');
Route::resource('pedidos', 'PedidosController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

