<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{TaskController, TeamController, UserController};

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
    return view('welcome');
});


Route::get('/register', function() {
    return view('auth.register');
})->name('register');

Route::post('/register', [UserController::class, 'register']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', function() {
    Auth::logout();
    return to_route('login');
})->name('logout');

Route::get('/teamselect', [TeamController::class, 'teamselect'])->name('teamselect')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::get('/team/new', function () {
    return view('auth.newteam');
})->name('newteam');
Route::post('/team/new', [TeamController::class, 'saveteam']);
