<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProviderController;

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


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::post('/addProvider',[ProviderController::class,'nuevoProveedor'])->name('proveedor.nuevo');
Route::post('editProvider/{id}',[ProviderController::class,'editarProveedor'])->name('proveedor.editar');
Route::get('deleteProvider/{id}',[ProviderController::class,'eliminarProveedor'])->name('proveedor.eliminar');