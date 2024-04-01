<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\VideoController;
use App\Http\Controllers\Api\TeacherController;
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

Route::prefix('course')->group(function () {
    Route::get('/', [CourseController::class, 'index']);
    Route::get('/{id}', [CourseController::class, 'show']);
    Route::post('/', [CourseController::class, 'store']);
    Route::put('/{id}', [CourseController::class, 'update']);
    Route::delete('/{id}', [CourseController::class, 'destroy']);
});

Route::prefix('lesson')->group(function () {
    Route::get('/', [LessonController::class, 'index']);
    Route::get('/{id}', [LessonController::class, 'show']);
    Route::post('/', [LessonController::class, 'store']);
    Route::put('/{id}', [LessonController::class, 'update']);
    Route::delete('/{id}', [LessonController::class, 'destroy']);
});

Route::prefix('review')->group(function () {
    Route::get('/', [ReviewController::class, 'index']);
    Route::get('/{id}', [ReviewController::class, 'show']);
    Route::post('/', [ReviewController::class, 'store']);
    Route::put('/{id}', [ReviewController::class, 'update']);
    Route::delete('/{id}', [ReviewController::class, 'destroy']);
});

Route::prefix('role')->group(function () {
    Route::get('/', [RoleController::class, 'index']);
    Route::get('/{id}', [RoleController::class, 'show']);
    Route::post('/', [RoleController::class, 'store']);
    Route::put('/{id}', [RoleController::class, 'update']);
    Route::delete('/{id}', [RoleController::class, 'destroy']);
});

Route::prefix('account')->group(function () {
    Route::get('/', [AccountController::class, 'index']);
    Route::get('/{id}', [AccountController::class, 'show']);
    Route::post('/', [AccountController::class, 'store']);
    Route::put('/{id}', [AccountController::class, 'update']);
    Route::delete('/{id}', [AccountController::class, 'destroy']);
});

Route::prefix('teacher')->group(function() {
    Route::get('/', [TeacherController::class, 'index']);
    Route::get('/{id}', [TeacherController::class, 'show']);
    Route::post('/', [TeacherController::class, 'store']);
    Route::put('/{id}', [TeacherController::class, 'update']);
    Route::delete('/{id}', [TeacherController::class, 'destroy']);
});

