<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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
//     // return view('welcome');
//     return "TEST";
// });


Route::get(uri: '/',action: [PagesController::class, 'index']);


Route::get(uri: '/students',action: [StudentController::class, 'index']);

Route::get(uri: '/students/{name}',action: [StudentController::class, 'show']);

Route::delete(uri: '/students/{name}',action: [StudentController::class, 'destroy']);

