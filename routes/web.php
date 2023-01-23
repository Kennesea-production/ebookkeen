<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WkbookController;
use App\Http\Controllers\AdminController;



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


Route::middleware('isGuest')->group(function() {

Route::get('/', [WkbookController::class, 'index']);
Route::get('/register', [WkbookController::class, 'register']);
Route::post('/register/storedata', [WkbookController::class, 'userRegis'])->name('userRegis');
Route::get('/login', [WkbookController::class, 'login']);
Route::post('/auth', [WkbookController::class, 'auth'])->name('auth');

});

Route::middleware('isAdmin:0')->group(function() {


Route::get('/dashboard', [WkbookController::class, 'dashboardUser']);
Route::get('/readBook/{bookID}', [WkbookController::class, 'readBook'])->name('readBook');
Route::get('/printPDF/{bookID}', [WkbookController::class, 'printPDF'])->middleware('throttle:3_download_perday')->name('printPDF');
Route::get('/bookCat', [WkbookController::class, 'bookCat'])->name('bookCat');
});


Route::middleware('isAdmin:1')->group(function() {

Route::get('/admin/dashboard', [AdminController::class, 'dashboardAdmin']);
Route::get('/admin/books', [AdminController::class, 'bookAdmin']);
Route::post('/admin/books/store', [AdminController::class, 'storeBook'])->name('storeBook');
Route::get('/admin/category', [AdminController::class, 'categoryAdmin']);
Route::post('/admin/category/store', [AdminController::class, 'storeCategory'])->name('storeCategory');
Route::get('/destroy/{id}', [AdminController::class, 'destroyUser'])->name('destroyUser');
Route::get('/destroy/books/{id}', [AdminController::class, 'destroyBook'])->name('destroyBook');
Route::get('/destroy/category/{id}', [AdminController::class, 'destroyCategory'])->name('destroyCategory');

});

Route::get('/logout', [WkbookController::class, 'logout'])->name('logout');

