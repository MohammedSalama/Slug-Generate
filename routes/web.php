<?php

use Illuminate\Support\Facades\Route;
use Wdd\Slug\Http\Controllers\SlugController;
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

Route::get('/slug-generate',[SlugController::class,'index']);
