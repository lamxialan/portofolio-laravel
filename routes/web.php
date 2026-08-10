<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Multi-page Routes
Route::get('/', [PortfolioController::class, 'about'])->name('about');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'submitContact'])->name('contact.submit');
