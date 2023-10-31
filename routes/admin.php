<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;

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

Route::prefix('admin')
    ->middleware(['auth','role:admin'])
    ->group(function () {
 
   //    users
    route::get('/dash',[DashboardController::class,'index'])->name('dash');
    route::get('/edit/{id}',[DashboardController::class,'edit'])->name('edit');
    route::put('/update/{id}',[DashboardController::class,'update'])->name('updateuser');
    route::get('/deleteuser/{id}',[DashboardController::class,'destroy'])->name('deleteuser');

   
    //    roles of user
    route::get('/roles',[RoleController::class,'index'])->name('roles');
    route::get('/addrole',[RoleController::class,'create'])->name('addrole');
    route::post('/storerole',[RoleController::class,'store'])->name('storerole');
    route::get('/deleterole/{id}',[RoleController::class,'destroy'])->name('deleterole');
    route::get('/roleedit/{id}',[RoleController::class,'edit'])->name('roleedit');
    route::put('/roleupdate/{id}',[RoleController::class,'update'])->name('roleupdate');

    // category of the post
    route::get('/category',[CategoryController::class,'index'])->name('category');
    route::get('/categoryadd',[CategoryController::class,'create'])->name('categoryadd');
    route::post('/storecate',[CategoryController::class,'store'])->name('storecate');
    route::get('/categoryedit/{id}',[CategoryController::class,'edit'])->name('categoryedit');
    route::put('/categoryupdate/{id}',[CategoryController::class,'update'])->name('categoryupdate');
    route::get('/deletecategory/{id}',[CategoryController::class,'destroy'])->name('deletecategory');

   
   
    // Posts routs 
    route::get('/posts',[PostController::class,'index'])->name('posts');
    route::get('/postadd',[PostController::class,'create'])->name('postadd');
    route::post('/storepost',[PostController::class,'store'])->name('storepost');
    route::get('/postedit/{id}',[PostController::class,'edit'])->name('postedit');
    route::put('/posteupdate/{id}',[PostController::class,'update'])->name('posteupdate');



 
});

