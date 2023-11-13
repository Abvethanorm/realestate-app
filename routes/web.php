<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ListingController;

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

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

   
   
  
    Route::prefix('listings')->group(function(){
         Route::get('/all-listings', [ListingController::class, 'index'])->name('all-listings');
        
        Route::get('/{slug}/{id}/edit-listing', [ListingController::class, 'edit'])->name('admin.edit');

         Route::get('/create-listing', [ListingController::class, 'create'])->name('admin.createlisting');

         Route::post('/', [ListingController::class, 'store'])->name('admin.post');

          Route::put('/{slug}/{id}', [ListingController::class, 'update'])->name('admin.update');

        
    });
    

});



Route::get('/', function () {
    return view('pages/home');
});

Route::get('/listing/{slug}/{id}', function () {
    return view('pages.single-listing');
});

Route::get('/{proprty_type}/{listing_type}/{city}', function () {
    return view('pages.listings');
});

//User login
Route::get('/login', function () {
    return view('auth.login');
    //User register
});Route::get('/register', function () {
    return view('auth.register');
});
//User saved
Route::get('/account/saved', function () {
    return view('pages.saved-listing');
});
//User status
Route::get('/account/show-status', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
