<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[PostController::class,'getIndex'])->name('blog.index');

Route::get('post/{id}',[PostController::class,'getPost'])->name('blog.post');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');


Route::group(['prefix' => 'admin'], function () {

    Route::get('',[PostController::class,'getAdminIndex'])->name('admin.index');

    Route::get('create',[PostController::class,'getAdminCreate'])->name('admin.create');
    
    Route::post('create',[PostController::class,'postAdminCreate'])->name('admin.create');
    
    Route::get('edit/{id}',[PostController::class,'getAdminEdit'])->name('admin.edit');
    
    Route::post('edit',[PostController::class,'postAdminUpdate'])->name('admin.update');

});	

