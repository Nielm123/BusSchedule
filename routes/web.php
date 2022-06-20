<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RedirectUsersController;
use App\Http\Controllers\UserController;
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





Route::get('/dashboard', function () {
    redirect(route('admin.home'));
})->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', function () {
    redirect(route('user.home'));
})->middleware(['guest'])->name('dashboard');


Route::get("/redirect", [RedirectUsersController::class,'showHome']);

Route::get('/', [UserController::class,'showHome'])->middleware(['guest'])->name('user.home');
Route::get('/schedules/{id}', [UserController::class,'showSchedules'])->middleware(['guest'])->name('user.schedules');
Route::get('/routes', [UserController::class,'showRoutes'])->middleware(['guest'])->name('user.routes');
Route::get('/schedules/stops/{id}', [UserController::class,'showStops'])->middleware(['guest'])->name('user.stops');
Route::get('/our-vehicles', [UserController::class,'showVehicle'])->middleware(['guest'])->name('user.vehicles');

Route::get('/admin/', [AdminController::class,'showHome'])->middleware(['auth'])->name('admin.home');
Route::get('/admin/schedules/{id}', [AdminController::class,'showSchedules'])->middleware(['auth'])->name('admin.schedules');
Route::get('/admin/routes', [AdminController::class,'showRoutes'])->middleware(['auth'])->name('admin.routes');
Route::get('/admin/schedules/stops/{id}', [AdminController::class,'showStops'])->middleware(['auth'])->name('admin.stops');
Route::get('/admin/our-vehicles', [AdminController::class,'showVehicle'])->middleware(['auth'])->name('admin.vehicles');

Route::get('/adminlogout', [AdminController::class,'logout'])->middleware(['auth'])->name('admin.logout');

Route::post('/vehicleCreate', [AdminController::class,'createVehicle'])->middleware(['auth'])->name('admin.vehicleCreate');
Route::post('/routeCreate', [AdminController::class,'createRoute'])->middleware(['auth'])->name('admin.createRoute');
Route::post('/scheduleCreate', [AdminController::class,'createSchedule'])->middleware(['auth'])->name('admin.createSchedule');
Route::post('/stopCreate', [AdminController::class,'createStop'])->middleware(['auth'])->name('admin.createStop');

Route::post('/vehicle', [AdminController::class,'deleteVehicle'])->middleware(['auth'])->name('admin.vehicle-delete');
Route::post('/route', [AdminController::class,'deleteRoute'])->middleware(['auth'])->name('admin.route-delete');
Route::post('/schedule', [AdminController::class,'deleteSchedule'])->middleware(['auth'])->name('admin.schedule-delete');
Route::post('/stop', [AdminController::class,'deleteStop'])->middleware(['auth'])->name('admin.stop-delete');

require __DIR__.'/auth.php';
