<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TicketController::class, 'create'])->name('home');
Route::get('/tickets', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets/register', [TicketController::class, 'store'])->name('tickets.store');

// Quick route to test SMTP mail sending from browser
Route::get('/test-email', [TicketController::class, 'sendTestEmail'])->name('email.test');
