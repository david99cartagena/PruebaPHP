<?php
use App\Http\Controllers\ProProcesoController;
use App\Http\Controllers\TipTipoDocController;
use App\Http\Controllers\DocDocumentoController;

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

Route::get("/", [ProProcesoController::class, "index"])->name("proproc.index");

//Route::post("/registar-proceso", [CrudController::class, "create"])->name("crud.create");
Route::resource('registar-proceso','App\Http\Controllers\ProProcesoController'::class);
//Route::post("/registar-proceso", [ProProcesoController::class, "create"])->name("ProProcesoController.create");

Route::post('/registar-proceso', [ProProcesoController::class, "create"])->name("ProProcesoController.create");