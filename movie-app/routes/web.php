<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;
use App\Models\Review;
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
Route::get('/movies', function () {
    return view('movies/index');
});

Route::get('/genres', function () {
    return view('genres/index');
});

Route::get('/reviews', function () {
    return view('reviews/index');
});

Route::get('/users', function () {
    return view('users/index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/', [HomeController::class, 'index']);

Route::resource('/movies', MovieController::class);
// Route::get('/movies', [MovieController::class, 'index']);
// Route::get('/movies/create', [MovieController::class, 'create']);
// Route::post('/movies', [MovieController::class, 'store']);  
// Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);
// Route::get('/movies/{movie}/edit', [MovieController::class, 'edit']);
// Route::put('/movies/{movie}', [MovieController::class, 'update']);

Route::resource('/genres', GenreController::class);
Route::resource('/reviews', ReviewController::class);


Route::get('/register', [AuthController::class, 'showRegistrationForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
