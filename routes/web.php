<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\ProduksiView;
use App\Http\Controllers\SessionController;
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
//blog route
Route::get('/', [blogController::class, 'index']);
Route::get('/contact', [blogController::class, 'contact']);
Route::get('/cad', [blogController::class, 'cad']);
Route::get('/fabric', [blogController::class, 'fabric']);
Route::get('/pants', [blogController::class, 'pants']);
Route::get('/tshirt', [blogController::class, 'tshirt']);
Route::get('/shirt', [blogController::class, 'shirt']);
Route::get('/outer', [blogController::class, 'outer']);
//end blog
Route::get('/login', [SessionController::class, 'index'])->middleware('isGuest');
Route::get('/logout', [SessionController::class, 'logout'])->middleware('isLogin');
Route::get('/register', [SessionController::class, 'register'])->middleware('isLogin');
Route::post('/register/create', [SessionController::class, 'create'])->middleware('isLogin');
Route::get('/dashboard', [ProduksiView::class, 'index'])->middleware('isLogin');
Route::get('/profile', [ProduksiView::class, 'profile'])->middleware('isLogin');
Route::post('/login/attempt', [SessionController::class, 'attempt'])->middleware('isGuest');
Route::resource('data', ProduksiController::class)->middleware('isLogin');
