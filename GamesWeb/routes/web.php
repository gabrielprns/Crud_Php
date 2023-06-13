<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;

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


Route::get('/',function (){
  return redirect('/Games');
});

Route::resource('/Games', GamesController::class)->only(['index', 'create', 'store', 'edit']);

Route::delete('Games/destroy/{game}', [GamesController::class, 'destroy'])->name("Games.destroy");