<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontent\AboutController;
use App\Http\Controllers\Frontent\GalleryController;
use App\Http\Controllers\Frontent\HomeController;
use App\Http\Controllers\Frontent\ServicesController;

use App\Http\Controllers\Frontent\Contact_usController;

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

Route::get('/',[HomeController::class, 'index']);

Route::get('/about',[AboutController::class, 'index']);

Route::get('/gallery', [GalleryController::class, 'index']);

Route::get('/services',[ServicesController::class, 'index']);

Route::get('/contact_us',[Contact_usController::class, 'index']);


/*
Route::get('/sample', function () {
    return view('Frontent.index');
});
*/