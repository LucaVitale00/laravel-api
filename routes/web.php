<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home'])
    ->name('home');


    // show
Route::get('/movies', [MainController::class, 'movies'])
    ->name('movies');

    // delete
Route::get('/delete/movie/{movie}', [MainController::class, 'delete'])
->name('delete.movie');

    // create
Route::get('/create/movie', [MainController::class, 'create'])
    ->name('create.movie');
    Route::post('/store/movie', [MainController::class, 'store'])
    ->name('store.movie');

    // edit
Route::get('/edit/movie/{movie}', [MainController::class, 'edit'])
->name('edit.movie');
Route::post('/update/movie/{movie}', [MainController::class, 'update'])
->name('update.movie');

Route::get('/api/movies', [ApiController::class, "movies"])->name("api.movies");