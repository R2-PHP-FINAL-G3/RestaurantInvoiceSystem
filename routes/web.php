<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\invoiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [dashboardController::class, 'index'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('invoices', [invoiceController::class, 'index'])->name('invoices');
Route::get('invoices/create', [invoiceController::class, 'create'])->name('invoices.create');
Route::post('invoice/store', [invoiceController::class, 'store'])->name('invoice.store');

Auth::routes();
