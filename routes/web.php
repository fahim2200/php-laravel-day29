<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::post('/new-student', [StudentController::class, 'create'])->name('new-student');
Route::get('/manage-student', [StudentController::class, 'manage'])->name('manage-student');
Route::get('/edit-student/{id}', [StudentController::class, 'edit'])->name('edit-student');
Route::post('/update-student/{id}', [StudentController::class, 'update'])->name('update-student');
Route::post('/delete-student/{id}', [StudentController::class, 'delete'])->name('delete-student');


Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('edit-blog');
Route::get('/add-blog', [BlogController::class, 'index'])->name('add-blog');
Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage-blog');
Route::post('/new-blog', [BlogController::class, 'createBlog'])->name('new-blog');

Route::get('/product-add', [ProductController::class, 'index'])->name('product-add');
Route::post('/product-manage', [ProductController::class, 'create'])->name('product-manage');
Route::get('/product-show', [ProductController::class, 'manage'])->name('product-show');
Route::get('/product-edit/{id}', [ProductController::class, 'edit'])->name('product-edit');

Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('update-product');

