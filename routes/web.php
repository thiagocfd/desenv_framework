<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aula2Controller;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ProdutoController;


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

// Route::get('/', function () {
//     $nome = "Paulo";
//     $sobrenome = "Reis";

//     return view('aula2', compact('nome', 'sobronome'));
// });

//Route::get('/{nome}', [Aula2Controller::class, 'dizerOla']);

//Route::get('/{genero}/{nome}', [Aula2Controller::class, 'saudar']);

//Route::get('/alunos', [AlunosController::class, 'index']);

Route::get('/', [ProdutoController::class, 'index']);

Route::get('/veiculos', [VeiculoController::class, 'index']);

Route::get('/veiculos/{fabricante}', [VeiculoController::class, 'index']);
