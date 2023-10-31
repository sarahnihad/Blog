<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\PostController;
use App\Http\Controllers\user\CommentController;
use App\Http\Controllers\user\CategoryController;

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


Route::get('/home', [HomeController::class,'index'])->name('home');

Route::prefix('user')
    ->middleware(['auth','role:user'])
    ->group(function () {

        Route::get('/showpost/{id}', [HomeController::class,'show'])->name('showpost');

        // Comments routes 
        route::post('/storecomment',[CommentController::class,'store'])->name('storecomment');
        route::put('/updatecomment/{id}',[CommentController::class,'update'])->name('updatecomment');
        route::get('/deletecomment/{id}',[CommentController::class,'destroy'])->name('deletecomment');

        
    
        // Category 
        Route::get('/categoryy', [CategoryController::class,'index'])->name('categoryy');
        Route::get('/mypost' ,[CategoryController::class,'mypost'])->name('mypost');
        Route::get('/catepost/{id}' ,[CategoryController::class,'show'])->name('catepost');
        Route::get('/editmyposts/{id}' ,[CategoryController::class,'editmypost'])->name('editmyposts');
        Route::put('/updatemyposts/{id}',[CategoryController::class,'updatemypost'])->name('updatemyposts');
        Route::get('/deletemyposts/{id}' ,[CategoryController::class,'deletemypost'])->name('deletemyposts');


        // posts
        Route::post('/addpost',[PostController::class,'store'])->name('addpost');

        



    });
    
Auth::routes();

