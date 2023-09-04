<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [VeiculoController::class, 'index']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/alugarveiculo', [VeiculoController::class, 'alugarVeiculo'])->name('alugar.veiculo');
Route::put('/alugarveiculo/{id}', [VeiculoController::class, 'alugarVeiculoStore'])->name('alugar.veiculo.store');

Route::post('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

Route::get('/cadastrarveiculo', [VeiculoController::class, 'cadastrarVeiculo'])->name('cadastrar.veiculo');
Route::post('/cadastrarveiculo', [VeiculoController::class, 'store'])->name('cadastrar.veiculo');
Route::get('/listarveiculo', [VeiculoController::class, 'show'])->name('listar.veiculos');
Route::get('/editarveiculo/{id}', [VeiculoController::class, 'edit'])->name('editar.veiculo');
Route::put('/editarveiculo/{id}', [VeiculoController::class, 'update'])->name('editar.veiculo');
Route::delete('/deletarveiculo/{id}', [VeiculoController::class, 'destroy']);

Route::post('/cadastrarusuario', [UsuarioController::class, 'store'])->name('cadastrar.usuario');
Route::get('/cadastrarusuario', [UsuarioController::class, 'cadastrarUsuario'])->name('cadastrar.usuario');
Route::get('/listarusuarios', [UsuarioController::class, 'show'])->name('listar.usuarios');
Route::get('/editarusuario/{id}', [UsuarioController::class, 'edit'])->name('editar.usuario');
Route::put('/editarusuario/{id}', [UsuarioController::class, 'update'])->name('editar.usuario.store');
Route::delete('/deletarusuario/{id}', [UsuarioController::class, 'destroy']);


// Route::middleware(['auth','web'])->group(function () {});