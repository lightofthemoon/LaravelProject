<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\CategoryController;

    Route::get('category',[CategoryController::class,'index']);
    
    //Route::get('category', 'Api\CategoryController@index')->name('category.index');

    Route::get('category/{id}', 'Api\CategoryController@show')->name('category.show');

    Route::post('category', 'Api\CategoryController@store')->name('category.store');

    Route::put('category/{id}', 'Api\CategoryController@update')->name('category.update');

    Route::patch('category/{id}', 'Api\CategoryController@update')->name('category.update');

    Route::delete('category/{id}', 'Api\CategoryController@destroy')->name('category.destroy');

    

?>