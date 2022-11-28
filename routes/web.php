<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Todocontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Todocontroller::class ,'dashboard'])->name('dashboard')->middleware(['auth']);
Route::get('/login', [Homecontroller::class ,'login'])->name('login');
Route::get('/register', [Homecontroller::class ,'register'])->name('register');
Route::post('/register', [Usercontroller::class ,'registerUser'])->name('registerUser');
Route::post('/login', [Usercontroller::class ,'loginUser'])->name('loginUser');
Route::get('/logout', [Usercontroller::class ,'logout'])->name('logout');
Route::get('delete/{id}', [TodoController::class, 'delete']);
Route::get('edit/{id}', [TodoController::class, 'edit']);
Route::post('/edit', [TodoController::class, 'updateTodo'])->name('updateTodo');
Route::post('/save-todo', [TodoController::class, 'saveTodo'])->name('saveTodo');