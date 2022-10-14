<?php
use App\Http\Controllers\notesController;

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

Route::get("/",[notesController::class,'index']);


Route::get("/new-note",[notesController::class,'create']);

Route::post("/note/store",[notesController::class,'store']);

Route::get("/note/show/{id}",[notesController::class,'show']);

Route::get("/note/edit/{id}",[notesController::class,'edit']);

Route::post("/note/update",[notesController::class,'update']);

Route::get("/note/delete/{id}",[notesController::class,'destroy']);