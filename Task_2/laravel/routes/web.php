<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',[PageController::class,'index'])->name('hello');
Route::get('/profile',[PageController::class,'Profile'])->name('profile');
Route::get('/studentlist',[StudentController::class,'studentlist'])->name('studentlist');

Route::get('/studentcreat',[StudentController::class,'studentcreat'])->name('studentcreat');
Route::post('/studentcreat',[StudentController::class,'studentcreatsubmit'])->name('studentcreat');


Route::get('/Regestration',[StudentController::class,'Regestration'])->name('Regestration');
Route::post('/Regestration',[StudentController::class,'Regestrationsubmit'])->name('Regestration');

Route::get('/Login',[StudentController::class,'Login'])->name('Login');
Route::post('/Login',[StudentController::class,'Loginsubmit'])->name('Login');


Route::get('/Contact',[StudentController::class,'Contact'])->name('Contact');