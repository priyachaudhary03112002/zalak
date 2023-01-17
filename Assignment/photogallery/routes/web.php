<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\photoController;
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

// Route::get('/index', function () {
//     return view('frontend.index');
// });

Route::get('/dashboard', function () {
    return view('backend.index');
});

Route::get('/add_photo', function () {
    return view('backend.add_photo');
});

Route::get('/index',[photoController::class,'viewall']);

Route::post('/add_photo',[photoController::class,'add_photo']);
Route::get('/manage_photo',[photoController::class,'manage_photo']);


