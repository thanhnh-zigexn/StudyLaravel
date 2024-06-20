<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/tasks', [TaskController::class, 'index']);
// Route::get('/users', UserController::class, 'index');
Route::resource('users', UserController::class)->middleware(['auth']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);


Route::get('BT1', function () {
    return view('Day1.BT1');
});

Route::get('BT2', function () {
    return view('Day1.BT2');
});

Route::get('BT3', function () {
    return view('Day1.BT3');
});

Route::get('BT4', function () {
    return view('Day1.BT4');
});

Route::get('BT5', function () {
    return view('Day1.BT5');
});

Route::get('BT6', function () {
    return view('Day1.BT6');
});

Route::get('BT7', function () {
    return view('Day1.BT7');
});

Route::get('BT8', function () {
    return view('Day1.BT8');
});

Route::get('BT9', function () {
    return view('Day1.BT9');
});