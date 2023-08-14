<?php

use App\Http\Controllers\auth\AuthController;
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
Route::group(['middleware' => 'auth'], function () {

Route::get('/', function () {
    return view('website.index');
})->name('home');
Route::controller(AuthController::class)->group(function () {
    Route::get('/logout', 'logout')->name('website.logout');
});
});
// auth
Route::prefix('website/')->name('website.')->group(function () {

    Route::controller(AuthController::class)->group(function () {
        Route::get('sign_in', 'show')->name('login');
        Route::post('login', 'login')->name('showLogin');

        Route::get('sign_up','createUser')->name('register');
        Route::post('register', 'register')->name('register_user');

    });
});
