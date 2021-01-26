<?php

use App\Http\Controllers\Auth\AuthenticationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/', [AuthenticationController::class, 'login'])
    ->name('login');
Route::get('/', [AuthenticationController::class, 'index'])
    ->name('login');

Route::middleware(['auth'])->group(function() {
    Route::get('onprogress', function () {
        return view('pages.onprogress');
    });
    
    Route::get('finish', function () {
        return view('pages.finish');
    });

    Route::get('delayed', function () {
        return view('pages.delayed');
    });

    Route::get('logout', [AuthenticationController::class, 'logout'])
        ->name('logout');
});
