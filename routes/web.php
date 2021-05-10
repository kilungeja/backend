<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/work', [PageController::class, 'work'])->name('work');
Route::get('/work/{project}', [PageController::class, 'single_work'])->name('single_work');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/opportunity', [PageController::class, 'opportunity'])->name('opportunity');





Auth::routes();


Route::prefix('admin')->group(function () {
    Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

    Route::resource('project', ProjectController::class);
});
