<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\OcorrenciaController;
use App\Http\Controllers\NotificacaoController;
use App\Models\Ocorrencia;

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

Route::get('/app', function () {
    return Inertia::render('App');
})->name('app');

Route::get('ocorrencias', [OcorrenciaController::class, 'create'])->name('ocorrencias.create');
Route::post('/ocorrencias', [OcorrenciaController::class, 'store'])->name('ocorrecias.store');

require __DIR__.'/auth.php';


