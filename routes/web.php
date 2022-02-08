<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;

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

// Route::get('students',[StudentController::class,'index']);
// Route::post('students',[StudentController::class,'store']);
// Route::post('/post',[StudentController::class, ''])


Route::get('/', function () {
    return view('welcome');
});

Route::get('/post',[PostController::class, 'index']);
Route::get('/post/create',[PostController::class, 'create']);
Route::post('/post',[PostController::class, 'store']);
Route::get('/post/{id}',[PostController::class, 'show']);
Route::get('/post/{id}/edit',[PostController::class, 'edit']);
Route::put('/post/{id}',[PostController::class, 'update']);
Route::delete('/post/{id}',[PostController::class, 'destroy']);

// Route::resource('post', PostController::class);