<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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



Route::get('/',[PageController::class, 'Home'])->name('Home');
Route::get('/product',[PageController::class, 'product'])->name('product');
Route::get('/item',[PageController::class, 'item'])->name('item');
Route::get('/contact',[PageController::class, 'contact'])->name('contact');
Route::get('/about',[PageController::class, 'about'])->name('about');
Route::get('/profile',[PageController::class, 'profile'])->name('profile');

Route::get('/Studentlist',[StudentController::class, 'Studentlist'])->name('StudentController');
