<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\LessonController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CartController;
use Illuminate\Support\Facades\Route;

Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/{id}', [CategoryController::class, 'show']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::put('/restore/{id}', [CategoryController::class, 'restore']);
    Route::put('/{id}', [CategoryController::class, 'update']);
    Route::delete('/{id}', [CategoryController::class, 'destroy']);
});

Route::prefix('course')->group(function () {
    Route::get('/', [CourseController::class, 'index']);
    Route::get('/{id}', [CourseController::class, 'show']);
    Route::post('/', [CourseController::class, 'store']);
    Route::put('/{id}', [CourseController::class, 'update']);
    Route::put('/restore/{id}', [CourseController::class, 'restore']);
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
    Route::put('/restore/{id}', [RoleController::class, 'restore']);
    Route::delete('/{id}', [RoleController::class, 'destroy']);
});

Route::prefix('account')->group(function () {
    Route::get('/', [AccountController::class, 'index']);
    Route::get('/{id}', [AccountController::class, 'show']);
    Route::post('/', [AccountController::class, 'store']);
    Route::put('/{id}', [AccountController::class, 'update']);
    Route::delete('/{id}', [AccountController::class, 'destroy']);
    Route::post('/login', [AccountController::class, 'login']);
});

Route::prefix('teacher')->group(function () {
    Route::get('/', [TeacherController::class, 'index']);
    Route::get('/{id}', [TeacherController::class, 'show']);
    Route::post('/', [TeacherController::class, 'store']);
    Route::put('/{id}', [TeacherController::class, 'update']);
    Route::delete('/{id}', [TeacherController::class, 'destroy']);
});

// Route::prefix('auth')->group(function() {
//     Route::post('/register', [AuthController::class, 'register']);
//     Route::post('/logIn', [AuthController::class, 'logIn']);
//     Route::post('/logOut', [AuthController::class, 'logOut']);
//     Route::post('/changePass', [AuthController::class, 'changePass']);
//     Route::post('/forgotPass', [AuthController::class, 'forgotPass']);
// });

Route::prefix('cart')->group(function () {
    Route::get('/{id}', [CartController::class, 'getByAccountId']);
    Route::post('/', [CartController::class, 'addToCart']);
    // Route::put('/{id}', [CartController::class, 'update']);
    Route::delete('/{id}', [CartController::class, 'deleteCart']);
});
