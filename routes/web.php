<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "a";
}); 

Route::get('/main_page', [App\Http\Controllers\MainController::class, 'index'])->name('main.index');
Route::get('/about_page', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index');

/////////////////////  POSTS

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('/post/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::patch('/post/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::delete('/post/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.delete');


Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::get('/posts/update', [App\Http\Controllers\PostController::class, 'update']);
Route::get('/posts/delete', [App\Http\Controllers\PostController::class, 'delete']);
Route::get('/posts/restore', [App\Http\Controllers\PostController::class, 'restore']);
Route::get('/posts/first_or_create', [App\Http\Controllers\PostController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [App\Http\Controllers\PostController::class, 'updateOrCreate']);




/////////////////    PRODUCTS

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('/products/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::get('/products/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::patch('/products/{product}', [App\Http\controllers\ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{product}', [App\Http\controllers\ProductController::class, 'destroy'])->name('product.delete');



/////////////////    PROFILES

Route::get('/profiles', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::get('/profiles/create', [App\Http\Controllers\ProfileController::class, 'create'])->name('profile.create');
Route::post('/profiles', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');
Route::get('/profiles/{profile}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
Route::get('/profiles/{profile}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profiles/{profile}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profiles/{profile}', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.delete');


//Route::get('/profiles', [App\Http\Controllers\ProfileController::class, 'index']);
//Route::get('/deliveries', [App\Http\Controllers\DeliveryController::class, 'index']);
//Route::get('/games', [App\Http\Controllers\GameController::class, 'index']);



///////////////////    RELATIONS ENTRY TABLES


