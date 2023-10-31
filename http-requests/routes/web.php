<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/posts',[PostsController::class, 'getAllPost']);
Route::get('/posts/{id}',[PostsController::class, 'getPostById']);

Route::get('/addpost', [PostsController::class, 'addPost']);

Route::get('/updatepost/{id}', [PostsController::class, 'updatePost']);

Route::get('/deletepost/{id}', [PostsController::class, 'deletePost']);

Route::get('/info', [PostsController::class, 'getInfo']);