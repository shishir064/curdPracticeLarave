<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostControllers;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login.form');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login');
Route::get('/signup', [AuthController::class, 'signup'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'signupStore'])->name('signup');

Route::get('/createpost', [PostControllers::class, 'createPost'])->name('createpostform');
Route::post('/createpost', [PostControllers::class, 'poststore'])->name('createpost');

Route::get('/viewpost', [PostControllers::class, 'viewPost'])->name('viewpost');
Route::get('/editpost/{id}', [PostControllers::class, 'editPost'])->name('editpost');
Route::put('/updatepost/{id}', [PostControllers::class, 'updatePost'])->name('updatepost');
Route::delete('/deletepost/{id}', [PostControllers::class, 'deletePost'])->name('deletepost');

Route::get('/addcategory', [CategoryController::class, 'categoryForm'])->name('category.form');
Route::post('/addcategory', [CategoryController::class, 'categoriesStore'])->name('category.store');
Route::get('/viewcategories', [CategoryController::class, 'categoriesStore'])->name('categories.store');

Route::get('/user', [UserController::class, 'index'])->name('index');