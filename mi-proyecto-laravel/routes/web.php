<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProProcesoController;
use App\Http\Controllers\TipTipoDocController;
use App\Http\Controllers\DocDocumentoController;

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

Route::post("/registar-proceso", [ProProcesoController::class, "create"])->name("proproc.create");
