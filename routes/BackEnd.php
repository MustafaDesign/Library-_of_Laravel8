<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\PostController;
use App\Http\Controllers\BackEnd\cuetomers\CustomersController;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::group(['prefix'=>'BackEnd','namespace'=>'customers'],function(){
//     Route::get('/home', [PostController::class,'posts']);
//     Route::get('/contact', [PostController::class,'contact']);
// });

// Route:: namespace('customers')->group(function(){
//     Route::get('/contact', [ CustomersController::class,'contact']);
// });