<?php

use App\Http\Controllers\AdsController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [AdsController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/add', [HomeController::class, 'showAddAdForm'])->name('ad.showAddForm');
Route::post('/home', [HomeController::class, 'storeAd'])->name('ad.add');

Route::get('/home/{ad}/edit', [HomeController::class, 'showEditAdForm'])->name('ad.showEditForm');
Route::patch('home/{ad}', [HomeController::class, 'updateAd'])->name('ad.update');

Route::get('/home/{ad}/delete', [HomeController::class, 'showDeleteAdForm'])->name('ad.showDeleteForm');
Route::delete('/home/{ad}', [HomeController::class, 'deleteAd'])->name('ad.delete');

Route::get('/{ad}', [AdsController::class, 'detail'])->name('detail');
