<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\OccurrenceController;

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

//Rota para Login
Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/app', function () {
    return Inertia::render('App');
})->name('app');

Route::post('/ocorrencias', [OccurrenceController::class, 'store'])->name('ocorrencias.store');

//Rota para vue Dicas
Route::get('/dicas', function () {
    return Inertia::render('Dicas');
})->name('dicas');

Route::get('/algofuturo', function () {
    return Inertia::render('AlgoFuturo');
})->name('algofuturo');

require __DIR__.'/auth.php';