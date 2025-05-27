<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiagnoseController;
use App\Http\Controllers\EmployeeDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\QuerieController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;
use App\Models\Invoice;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Router;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/#services', [HomeController::class, 'index_services'])->name('home#services');
Route::get('/#about', [HomeController::class, 'index_about'])->name('home#about');
Route::get('/#contact', [HomeController::class, 'index_contact'])->name('home#contact');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register.store', [RegisteredUserController::class, 'store'])->name('register.store');
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

Route::prefix('user')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('user_dashboard');

    Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
    Route::get('/pets/create', [PetController::class, 'create'])->name('pets.create');
    Route::post('/pets/store', [PetController::class, 'store'])->name('pets.store');
    Route::get('/pets/{pet}', [PetController::class, 'show'])->name('pets.show');
    Route::get('/pets/{pet}/edit', [PetController::class, 'edit'])->name('pets.edit');
    Route::patch('/pets/{pet}/update', [PetController::class, 'update'])->name('pets.update');
    Route::delete('/pets/{pet}/destroy', [PetController::class, 'destroy'])->name('pets.destroy');
    

    Route::get('/quotes', [QuoteController::class, 'index'])->name('quotes.index');
    Route::get('/quotes/create', [QuoteController::class, 'create'])->name('quotes.create');
    Route::post('/quotes/store', [QuoteController::class, 'store'])->name('quotes.store');
    Route::get('/quotes/{quote}', [QuoteController::class, 'show'])->name('quotes.show');
    Route::get('/quotes/{quote}/edit', [QuoteController::class, 'edit'])->name('quotes.edit');
    Route::patch('/quotes/{quote}/update', [QuoteController::class, 'update'])->name('quotes.update');

    Route::get('queries', [QuerieController::class, 'index'])->name('queries.index');
    Route::get('queries/create', [QuerieController::class, 'create'])->name('queries.create');  
    Route::post('queries/store', [QuerieController::class, 'store'])->name('queries.store');
    Route::get('queries/{querie}', [QuerieController::class, 'show'])->name('queries.show');
    Route::get('queries/{querie}/edit', [QuerieController::class, 'edit'])->name('queries.edit');
    Route::patch('queries/{querie}/update', [QuerieController::class, 'update'])->name('queries.update');

    Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
    Route::get('invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');  
    Route::post('invoices/store', [InvoiceController::class, 'store'])->name('invoices.store');
    Route::get('invoices/{invoice}', [InvoiceController::class, 'show'])->name('invoices.show');
    Route::get('invoices/{invoice}/edit', [InvoiceController::class, 'edit'])->name('invoices.edit');
    Route::patch('invoices/{invoice}/update', [InvoiceController::class, 'update'])->name('invoices.update');

    Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    Route::get('payments/create', [PaymentController::class, 'create'])->name('payments.create');  
    Route::post('payments/store', [PaymentController::class, 'store'])->name('payments.store');
    Route::get('payments/{payment}', [PaymentController::class, 'show'])->name('payments.show');
    Route::get('payments/{payment}/edit', [PaymentController::class, 'edit'])->name('payments.edit');
    Route::patch('payments/{payment}/update', [PaymentController::class, 'update'])->name('payments.update');

    Route::get('/diagnoses', [DiagnoseController::class, 'index'])->name('diagnoses.index');
    Route::get('diagnoses/create', [DiagnoseController::class, 'create'])->name('diagnoses.create');  
    Route::post('diagnoses/store', [DiagnoseController::class, 'store'])->name('diagnoses.store');
    Route::get('diagnoses/{diagnose}', [DiagnoseController::class, 'show'])->name('diagnoses.show');
    Route::get('diagnoses/{diagnose}/edit', [DiagnoseController::class, 'edit'])->name('diagnoses.edit');
    Route::patch('diagnoses/{diagnose}/update', [DiagnoseController::class, 'update'])->name('diagnoses.update');
});



Route::prefix('employee')->group(function () {
    Route::get('/dashboard', [EmployeeDashboardController::class, 'dashboard'])->name('employee_dashboard');
    Route::get('/pets', [PetController::class, 'index'])->name('pets.employee.index');
});





Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
