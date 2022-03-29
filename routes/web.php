<?php

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
use App\Http\Controllers\BaseController;
use App\Http\Controllers\FormController;

Route::get('/',[BaseController::class, "index"]);

Route::get('/obaut',[BaseController::class, "obaut"]);

Route::get('/contact',[BaseController::class, "contact"]);
Route::get('/contact1',[BaseController::class, "contact1"]);
Route::get('/education',[BaseController::class, "education"]);
Route::get('/innovations',[BaseController::class, "innovations"]);
Route::get('/office',[BaseController::class, "office"]);
Route::get('/personnel',[BaseController::class, "personnel"]);
Route::get('/product',[BaseController::class, "product"]);
Route::get('/proizvod',[BaseController::class, "proizvod"]);
Route::get('/ruk',[BaseController::class, "ruk"]);
Route::get('/search',[BaseController::class, "search"]);
Route::get('/stazh',[BaseController::class, "stazh"]);

Route::post('/form',[FormController::class,"index"]);

