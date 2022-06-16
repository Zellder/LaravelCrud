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

use App\Http\Controllers\CrudController;

Route::get('/', [CrudController::Class,'index']);

Route::get('/teste1',[CrudController::Class,'question1']);

Route::get('/teste2',[CrudController::Class,'question2']);

Route::get('/teste3', function () {
    return view('teste3');
});

Route::get('/teste4',[CrudController::Class,'question4']);

Route::get('/crud',[CrudController::Class,'crud']);

Route::get('/create',[CrudController::Class,'Create']);

Route::post('/create',[CrudController::Class,'store']);

Route::get('/consulta', [CrudController::Class,'consulta']);

Route::delete('/consulta/{id}',[CrudController::Class,'destroy'])->name('consulta.destroy');

Route::get('/consulta/{id}',[CrudController::Class,'edit'])->name('consulta.edit');

Route::put('/update/{id}',[CrudController::Class,'update'])->name('consulta.update');

Route::get('/login', [CrudController::Class,'login']);

