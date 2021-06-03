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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('frontend.pages.home');
});
Route::get('/about', function () {
    return view('frontend.pages.about');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
Route::get('/team', function () {
    return view('frontend.pages.team');
});
Route::get('/client', function () {
    return view('frontend.pages.client');
});
Route::get('/web-development', function () {
    return view('frontend.pages.web-development');
});
Route::get('/app-development', function () {
    return view('frontend.pages.app-development');
});
Route::get('/digital-marketing', function () {
    return view('frontend.pages.digital-marketing');
});
Route::get('/seo', function () {
    return view('frontend.pages.seo')->name('seo');
});
Route::get('/brand-development', function () {
    return view('frontend.pages.brand-development');
});
Route::get('/graphic-design', function () {
    return view('frontend.pages.graphic-design');
});