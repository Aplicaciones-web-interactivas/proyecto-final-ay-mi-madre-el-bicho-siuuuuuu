<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;

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
Route::get('/dashboard_graphics',[DashboardController::class, 'getDashboardData'])->name('ruta_graficas_admin');
Route::get('/workspace/{userId}',[WorkspaceController::class, 'index'])->name('workspace');


Route::post('/addProvider',[ProviderController::class,'nuevoProveedor'])->name('proveedor.nuevo');
Route::post('editProvider/{id}',[ProviderController::class,'editarProveedor'])->name('proveedor.editar');
Route::get('deleteProvider/{id}',[ProviderController::class,'eliminarProveedor'])->name('proveedor.eliminar');
Route::get('graphics/{id}',[ProviderController::class,'graficaBarras'])->name('ruta_graficas');

Route::post('/addSection',[SectionController::class,'nuevaSeccion'])->name('seccion.nuevo');
Route::post('/editSection',[SectionController::class,'editarSeccion'])->name('seccion.editar');
Route::get('/editSection/{id}',[SectionController::class,'eliminarSeccion'])->name('seccion.eliminar');

Route::post('/addProduct',[ProductController::class,'nuevoProducto'])->name('producto.nuevo');
Route::post('/editProduct',[ProductController::class,'editarProducto'])->name('producto.editar');
Route::get('/deleteProduct/{id}',[ProductController::class,'eliminarProducto'])->name('producto.eliminar');

Route::get('/shop',[ShopController::class, 'index'])->name('shop');
Route::get('/proceed-to-payment', [ShopController::class, 'processPayment'])->name('proceed-to-payment');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

