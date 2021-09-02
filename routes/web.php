<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\TarefasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome');
*/
Route::get('/', HomeController::class);

Route::prefix('/tarefas')->group(function(){
    
    Route::get('/', [TarefasController::class, 'list']); // listagem de tarefas

    Route::get('add', [TarefasController::class, 'add']); // Tela de adição
    Route::post('add', [TarefasController::class, 'addAction']); // Açao de adição

    Route::get('edit/{id}', [TarefasController::class, 'edit']); // Tela de edição 
    Route::post('edit/{id}', [TarefasController::class, 'editAction']); // Açao de edição 

    Route::get('delete/{id}', [TarefasController::class, 'del']); // Ação de deletar

    Route::get('marcar/{id}', [TarefasController::class, 'done']); // Marcar resolvido/não

});

Route::prefix('/config')->group(function () {
    Route::get('/', [ConfigController::class, 'index']);
    Route::post('/', [ConfigController::class, 'index']);

    Route::get('info', [ConfigController::class,'info']);
    Route::get('permissoes', [ConfigController::class,'permissoes']);
});

Route::fallback(function(){
    return view('404');
});