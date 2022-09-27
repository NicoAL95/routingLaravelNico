<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NicoController;

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
    return view('index');
});

// About
Route::get('/about', [NicoController::class, 'about']);

// News
Route::get('/news', [NicoController::class, 'news']);

// Contact
Route::get('/contact', [NicoController::class, 'contact']);

// Recipes
Route::get('/recipes/fruit', [NicoController::class, 'recFruit']);
Route::get('/recipes/dairy', [NicoController::class, 'recDairy']);

// Community
Route::get('/community/forum', [NicoController::class, 'comForum']);
Route::get('/community/gallery', [NicoController::class, 'comGallery']);
