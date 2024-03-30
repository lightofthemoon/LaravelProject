<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\VideoController;
    // Route::get('category',[CategoryController::class,'index']); ///correct
    
    //Route::get('category', 'Api\CategoryController@index')->name('category.index');

    //Route::get('category/{id}', 'Api\CategoryController@show')->name('category.show'); /////wrong

    // Route::post('category',[CategoryController::class,'store']);

    //Route::post('category', 'Api\CategoryController@store')->name('category.store');

    // Route::put('category/{id}', 'Api\CategoryController@update')->name('category.update');

    // Route::patch('category/{id}', 'Api\CategoryController@update')->name('category.update');

    // Route::delete('category/{id}', 'Api\CategoryController@destroy')->name('category.destroy');
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('/{id}', [CategoryController::class, 'show']);
        Route::post('/', [CategoryController::class, 'store']);
        Route::put('/{id}', [CategoryController::class, 'update']);
        Route::delete('/{id}', [CategoryController::class, 'destroy']);
    });
    