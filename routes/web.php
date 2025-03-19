<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get('/', [GeneralController::class, 'homepage'])->name('homepage');

Route::get('/about-us', [GeneralController::class, 'secondPage'])->name('about.page');

Route::get('/contact-us', [GeneralController::class, 'thirdPage'])->name('contact.page');

Route::get('/dettaglio-auto/{id}', [GeneralController::class, 'dettaglioAuto'])->name('auto.dettaglio');

Route::post('/contact-us/send', [GeneralController::class, 'store'])->name('contact.store');

Route::get("/grazie", [GeneralController::class, 'thanks'])->name('thank-you'); 