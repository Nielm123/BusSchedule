<?php

use App\Http\Controllers\ScheduleController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/', [ScheduleController::class, 'index'])->name('routes');


//To jest prototyp do tego zeby pobrac z navbara nazwe routa i przeslac ja do schedule a nastepnie na tej podstawie wyswietlic rozklad jazdy tej trasy
//Przerzucic do controllera jezeli useful
Route::get('/schedules/{name}', function () {
    return view('schedule');
})->name('schedule');

Route::get('/logout', function () {
    Auth::logout();
    return view('home');
});

Auth::routes();
