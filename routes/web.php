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
    return view('frontend.home');
})->name('home');

Auth::routes();

//Frontend Routes
Route::get('/home', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/contact-us', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::get('/about-us', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/projects', [App\Http\Controllers\FrontendController::class, 'projects'])->name('projects');
Route::get('/project-details', [App\Http\Controllers\FrontendController::class, 'projectDetails'])->name('project-details');
Route::get('/products', [App\Http\Controllers\FrontendController::class, 'products'])->name('products');
Route::get('/product-details', [App\Http\Controllers\FrontendController::class, 'productDetails'])->name('product-details');
Route::get('/showroom', [App\Http\Controllers\FrontendController::class, 'showroom'])->name('showroom');
Route::get('/factory', [App\Http\Controllers\FrontendController::class, 'factory'])->name('factory');
Route::get('/events', [App\Http\Controllers\FrontendController::class, 'events'])->name('events');
Route::get('/event-details', [App\Http\Controllers\FrontendController::class, 'eventDetails'])->name('event-details');
Route::get('/news', [App\Http\Controllers\FrontendController::class, 'news'])->name('news');
Route::get('/news-details', [App\Http\Controllers\FrontendController::class, 'newsDetails'])->name('news-details');


//CMS Routes
Route::group(['prefix'=>'cms','as'=>'cms.'], function(){
    Route::get('/', [App\Http\Controllers\CMSController::class, 'index'])->name('dashboard');
    Route::resource('news', App\Http\Controllers\NewsController::class);
});