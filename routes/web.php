<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\deliveryController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\mealController;
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

// ---------- INVOICES ------------ //
Route::get('invoices', [invoiceController::class, 'index'])->name('invoices');
Route::get('invoices/create', [invoiceController::class, 'create'])->name('invoices.create');
Route::post('invoice/store', [invoiceController::class, 'store'])->name('invoice.store');
Route::get('deliveryorders', [invoiceController::class, 'deliveringOrders'])->name('deliveringOrders');

// ---------- CUSTOMERS ------------ //
Route::get('customers', [customerController::class, 'index'])->name('customers');
Route::get('customers/create', [customerController::class, 'create'])->name('customers.create');
Route::post('customer/store', [customerController::class, 'store'])->name('customer.store');

// ---------- MEALS ------------ //
Route::get('meals', [mealController::class, 'index'])->name('meals');
Route::get('meals/create', [mealController::class, 'create'])->name('meals.create');
Route::post('meal/store', [mealController::class, 'store'])->name('meal.store');

// ---------- DELIVERY GUYS ------------ //
Route::get('deliveryguys', [deliveryController::class, 'index'])->name('deliveryguys');
Route::get('deliveryguys/create', [deliveryController::class, 'create'])->name('deliveryguys.create');
Route::post('deliveryguy/store', [deliveryController::class, 'store'])->name('deliveryguy.store');

Auth::routes();
