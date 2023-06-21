<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ToDoMaker;
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

Route::match(['get', 'post'], '/criar', [ToDoMaker::class, 'criar'])->name('criar');
Route::get('/', [ToDoMaker::class, 'exibir'])->name('welcome');
Route::get('/editar/{index}', [ToDoMaker::class, 'editar'])->name('editar');
Route::post('/atualizar/{index}', [ToDoMaker::class, 'atualizar'])->name('atualizar');

