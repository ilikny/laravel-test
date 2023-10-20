<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieCRUDController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\VideogameController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);

//laravel.test/awards
Route::get('/awards', [AwardController::class, 'index']);

//directly show the view
Route::view('/terms', 'terms');

//just redirecting to the other route
Route::redirect('/termsandconditon', 'terms');


Route::get('/top-rated-movies', [MovieController::class, 'topRated']);

Route::get('/top-rated-games', [VideogameController::class, 'topRated']);

Route::get('/movies/shawshank-redemption', [MovieController::class, 'shawshank']);

Route::get('/search', [MovieController::class, 'search'])->name('search');

//           toto dole je stejne jako MovieController::class
// Route::get('/movies/{order?}', ['App\Http\Controllers\MovieController', 'index']);

Route::get('/about-us', [AboutController::class, 'aboutUs']);

// Route::get('/movie/detail/{movie_id}', [MovieController::class, 'detail'])->whereNumber('movie_id')->name('movie.detail');


// Route::post('/movies/{movie_id}/review', [ReviewController::class, 'store']);



// //this is route for insert to the database
// Route::post('/movies', [MovieController::class, 'store']);

// //this is for update one specific movie
// Route::put('/movies/{movie_id}', [MovieController::class, 'update']);



//movie CRUD
Route::get('/movies/create', [MovieCRUDController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieCRUDController::class, 'store'])->name('movies.store');

Route::get('/movies/{movie}/edit', [MovieCRUDController::class, 'edit'])->whereNumber('movie')->name('movies.edit');
Route::put('/movies/{movie}', [MovieCRUDController::class, 'update'])->name('movies.update');

Route::delete('/movies/{movie}', [MovieCRUDController::class, 'destroy'])->whereNumber('movie')->name('movies.destroy');
