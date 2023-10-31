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
    return view('pages/home');
});
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/{proprty_type}/{listing_type}', function () {
    return view('welcome');
});
Route::get('/listing/{slug}/{id}', function () {
    return view('welcome');
});
//User login
Route::get('/login', function () {
    return view('welcome');
    //User register
});Route::get('/register', function () {
    return view('welcome');
});
//User saved
Route::get('/account/saved', function () {
    return view('welcome');
});
//User status
Route::get('/account/show-status', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
