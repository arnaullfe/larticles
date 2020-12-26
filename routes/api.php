<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List articles
Route::get('articles','ArticleController@index');

//List single article
Route::get('articles/{id}','ArticleController@show');

//create new article
Route::post('articles','ArticleController@store');

//update article
Route::post('articles','ArticleController@store');//24:54

//delete article
Route::delete('articles','ArticleController@destroy');
