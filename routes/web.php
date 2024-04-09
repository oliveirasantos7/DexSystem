<?php

use App\Http\Controllers\ClientController;
use App\Livewire\StockIndex;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Livewire\Client;
use App\Livewire\Cliente;
use App\Livewire\NewProject;
use App\Livewire\ProjectDetail;
use App\Livewire\Projects;

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

Route::get('/', function () {
    return view('home');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
    Route::get('/estoque', StockIndex::class)->name('estoque.index');
    Route::get('/projetos', Projects::class)->name('projetos.index');
    Route::get('/cliente', Cliente::class)->name('client.index');
    Route::get('/projeto/detalhes', ProjectDetail::class)->name('projetos.details');
    Route::get('/projeto/novo', NewProject::class)->name('projetos.novo');
    Route::post('/dashboard', [Dashboard::class, 'deleteMultiples'])->name('delete.multiples');


});

