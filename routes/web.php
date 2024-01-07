<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') -> middleware('verified');
Route::get('/', function () {
    return "Logged Out";
});

Route::get('/redirect/{service}', 'App\Http\Controllers\SocialController@redirect');
Route::get('/callback/{service}', 'App\Http\Controllers\SocialController@callback');
// 216253641539154   47ac56976b25670c4f62ed48772d79da 