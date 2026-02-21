<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');

// Editor Routes removed - switching to static site
