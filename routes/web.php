<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;

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

Route::post('/', function () {
    return view('welcome');
});

Route::get('/recipes', [RecipesController::class,'index'])->name('recipes.recipes');

Route::get('/recipes/create', [RecipesController::class,'create'])->name('recipes.create');

Route::post('/recipes', [RecipesController::class,'store'])->name('recipes.store');

Route::get('/recipes{recipe}/edit', [RecipesController::class,'edit'])->name('recipes.edit');
Route::put('/recipes{recipe}/update', [RecipesController::class,'update'])->name('recipes.update');
Route::delete('/recipes{recipe}/destroy', [RecipesController::class,'destroy'])->name('recipes.destroy');

Route::get('/search', [RecipesController::class,'search'])->name('recipes.search');
