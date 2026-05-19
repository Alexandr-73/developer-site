<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;


Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('developer.contact');

Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/services', [PortfolioController::class, 'services'])->name('services');
// Route::get('/reviews', [PortfolioController::class, 'reviews'])->name('reviews');
// Route::get('/photos', [PortfolioController::class, 'photos'])->name('photos');
Route::get('/contacts', [PortfolioController::class, 'contacts'])->name('contacts');