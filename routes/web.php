<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('livro', 'LivroController');
Route::resource('livro_emprestado', 'Livro_emprestadoController');
Route::resource('permissao', 'PermissaoController');
Route::resource('permissao_role', 'Permissao_roleController');
Route::resource('role', 'RoleController');
Route::resource('usuario_role', 'Usuario_roleController');
Route::resource('user', 'UserController');