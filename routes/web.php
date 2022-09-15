<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('index');

# Подключаем middleware admin
Route::get('/dashboard')->middleware(['auth', 'admin'])->name('dashboard');


require __DIR__.'/auth.php';

# Роуты для менеджера
Route::get('/admin', function(){
    echo "АДМИН";
})->middleware(['auth','admin'])->name('admin');


# Роуты для пользователей
Route::get('/user', function(){
    echo "ПРОСТОЙ ПОЛЬЗОВАТЕЛЬ";
})->middleware(['auth'])->name('user');
    