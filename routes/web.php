<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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
// Route::get('/home', 'SiteController@index')->name('index');
Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/aboutus', [SiteController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [SiteController::class, 'contactus'])->name('contactus');
Route::get('/demo', [SiteController::class, 'demo'])->name('demo');
Route::get('/career', [SiteController::class, 'career'])->name('career');
Route::get('/faq', [SiteController::class, 'faq'])->name('faq');
Route::get('/download', [SiteController::class, 'download'])->name('download');
Route::get('/app', [SiteController::class, 'app'])->name('app');