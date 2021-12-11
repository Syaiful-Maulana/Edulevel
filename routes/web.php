<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdulevelController;
use App\Http\Controllers\ProgramController;
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
    return view('welcome', ['title' => 'Framework']);
});
Route::get('home', function () {
    return view('home');
});

Route::get('edulevel', [EdulevelController::class, 'data']);
Route::get('edulevel/add', [EdulevelController::class, 'add']);
Route::post('edulevel', [EdulevelController::class, 'addProcess']);
Route::get('edulevel/edit/{id}', [EdulevelController::class, 'edit']);
Route::patch('edulevel/{id}', [EdulevelController::class, 'editProcess']);
Route::delete('edulevel/{id}', [EdulevelController::class, 'delete']);

Route::get('program/trash', [ProgramController::class, 'trash']);
Route::get('program/restore/{id?}/', [ProgramController::class, 'restore']);
Route::get('program/delete/{id?}/', [ProgramController::class, 'delete']);
Route::resource('program', ProgramController::class);