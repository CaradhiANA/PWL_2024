<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PhotoController;


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


Route::get('/world', function () {
    return 'World';
});

Route::get('/posts/{post}/comments/{comment}', function 
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });


Route::get('/user/{name?}', function ($name='Jonh') {   
    return 'Nama saya '.$name;
});

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticlesController::class,'articles']);

Route::resource('photos', PhotoController::class);