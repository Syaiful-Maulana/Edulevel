<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('register',[LoginController::class, 'register'])->name('register');
Route::post('simpanRegistrasi',[LoginController::class, 'simpanRegistrasi'])->name('simpanRegistrasi');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function (){
    Route::resource('program', ProgramController::class);
    Route::get('home', function () {
        return view('home');
    });
    
    Route::get('edulevel', [EdulevelController::class, 'data']);
    Route::get('edulevel/add', [EdulevelController::class, 'add']);
    Route::post('edulevel', [EdulevelController::class, 'addProcess']);
    Route::get('edulevel/edit/{id}', [EdulevelController::class, 'edit']);
    Route::patch('edulevel/{id}', [EdulevelController::class, 'editProcess']);
    Route::delete('edulevel/{id}', [EdulevelController::class, 'delete']);

});