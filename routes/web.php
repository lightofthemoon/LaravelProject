<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/account/{id}', [AccountController::class, 'show'])->name('account.show');
// Route::group(['namespace' => 'App\Http\Controllers'], function()
// {  
//     Route::get('/', 'PagesController@index')->name('pages.index');
//     // Route::get('/helloworld', 'PagesController@index')->name('pages.helloworld');
//     Route::get('/about', 'PagesController@about')->name('pages.about');
// });


// Route::group(['prefix' => 'categories','middleware' => ['web']], function () {
//     Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
//     Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
//     Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
//     Route::put('{id}', [CategoryController::class, 'update'])->name('categories.update');
//     Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
//     Route::delete('{id}/delete', [CategoryController::class, 'destroy'])->name('categories.destroy');
// });
// Route::get('/stream/{filename}', 'VideoController@stream')->name('stream');