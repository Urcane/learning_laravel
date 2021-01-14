<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('todo_api')
    ->namespace('Api')
    ->name('todo_api.')
    ->group(function () {
        Route::get('/', 'ToDoApiController@getAllToDoList')->name('getAll');
        Route::get('{todo:tittle}', 'ToDoApiController@getToDoList')->name('getOne');
        Route::post('add', 'ToDoApiController@createToDoList')->name('add');
        Route::put('update/{id}', 'ToDoApiController@updateToDoList')->name('update');
        Route::delete('delete/{id}', 'ToDoApiController@deleteToDoList')->name('delete');
    });
