<?php

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

Route::get('/', function () {
    return view('frontend.pages.homepage');
});

Route::post('/contact', [App\Http\Controllers\HomepageController::class, 'contact_us'])->name('contact');
Route::post('/subscribe', [App\Http\Controllers\HomepageController::class, 'subscribe'])->name('subscribe');

