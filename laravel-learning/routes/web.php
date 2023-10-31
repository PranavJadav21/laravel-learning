<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentDataController;
use App\Http\Controllers\EmployeeController;

use App\Http\Controllers\MobileController;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\SongController;
use App\Http\Controllers\SingerController;



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

Route::get('', function () {
    return view('welcome');
});

// Assigning Middleware To Routes

Route::get('contact', function () {
    return view('contact');
})->middleware('constructions');


// Middleware Groups

// Route::middleware(['constructions'])->group(function(){
//     Route::get('contact', function () {
//         return view('contact');
//     })->middleware('constructions');

//     Route::get('', function () {
//         return view('welcome');
//     });
// });

// registration form routes
Route::get('form', [RegistrationController::class, 'showform']);
Route::post('form', [RegistrationController::class, 'signup']);

Route::view('olddata', 'registration.olddata');
// Route::get('form', function(){
//     return view('registration.userform');
// });

// Route::post('form', function(){
//     return view('registration.userform');
// });

Route::get('/student',[StudentController::class, 'show']);

Route::get('/studata',[StudentDataController::class, 'index'])->name('index');

Route::post('/studata',[StudentDataController::class, 'create']);

Route::get('/edit/{id}',[StudentDataController::class, 'edit'])->name('edit');

Route::put('/edit/{id}',[StudentDataController::class, 'update'])->name('update');

Route::get('/delete/{id}',[StudentDataController::class, 'destroy'])->name('destroy');

Route::get('/emp_list',[EmployeeController::class, 'index'])->name('index');

Route::post('/emp_list',[EmployeeController::class, 'create'])->name('create');

Route::get('/emp_list/edit/{id}',[EmployeeController::class, 'edit'])->name('edit');

Route::put('/emp_list/edit/{id}',[EmployeeController::class, 'update'])->name('update');

Route::get('/emp_list/delete/{id}',[EmployeeController::class, 'destroy'])->name('destroy');

Route::get('add-customer', [CustomerController::class, 'add_customer']);

Route::get('show_mobile/{id}', [CustomerController::class,'show_mobile']);

Route::get('show_customer/{id}', [MobileController::class,'show_customer']);

Route::get('add-author', [AuthorController::class,'add_author']);

Route::get('add-post/{id}', [PostController::class,'add_post']);

Route::get('show-post/{id}', [PostController::class,'show_post']);

Route::get('show-author/{id}', [AuthorController::class,'show_author']);

Route::get('add-song', [SongController::class, 'add_song']);

Route::get('add-singer', [SingerController::class, 'add_singer']);

Route::get('show-song/{id}', [SongController::class, 'show_song']);

Route::get('show-singer/{id}', [SingerController::class, 'show_singer']);