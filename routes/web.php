<?php

use App\Http\Controllers\PaginasController;
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

//Route::get('/informacion/{nombre}/{apellido?}',[PaginasController::class, "informacion"]);

Route::get('/about',[PaginasController::class, "informacion"])->name("info");

Route::get('/contacto',[PaginasController::class, "contacto"])->name("contacto");

Route::post("/contacto",[PaginasController::class, "recibeContacto"])->name("recibe-contacto");
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
