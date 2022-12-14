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
Route::get('/dashboard', [\App\Http\Controllers\ApplicationsController::class, 'manager_table'])->middleware(['auth', 'admin'])->name('dashboard');


require __DIR__.'/auth.php';

# Роуты для менеджера
Route::get('/admin', function(){
    echo "АДМИН";
})->middleware(['auth','admin'])->name('admin');

Route::post('/update_applications', [\App\Http\Controllers\ApplicationsController::class, 'update_applications'])->middleware(['auth', 'admin'])->name('update');


# Роуты для пользователей
Route::get('/user', [\App\Http\Controllers\ApplicationsController::class, 'users_table'])->middleware(['auth'])->name('user');
//Роут добавления заявок
Route::post('/add_applications', [\App\Http\Controllers\ApplicationsController::class, 'add_applications'])->middleware(['auth'])->name('add_applications');
    