<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'index']);
Route::get('/adicionar', [BookController::class, 'addBook']);
Route::get('/buscar', [BookController::class, 'searchBook']);
Route::get('/livro/{id}', [BookController::class, 'book']);
Route::get('/editar/{id}', [BookController::class, 'edit']);

// CRUD
Route::post('/adicionado', [BookController::class, 'store']);
Route::get('/encontrado', [BookController::class, 'show']);
Route::get('/apagar/{id}', [BookController::class, 'delete']);
Route::put('/editado/{id}', [BookController::class, 'update']);
