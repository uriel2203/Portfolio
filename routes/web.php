<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);

// Editor Routes
Route::prefix('edit')->group(function () {
    Route::post('/experience', [PortfolioController::class, 'storeExperience']);
    Route::put('/experience/{experience}', [PortfolioController::class, 'updateExperience']);
    Route::delete('/experience/{experience}', [PortfolioController::class, 'deleteExperience']);

    Route::post('/certificate', [PortfolioController::class, 'storeCertificate']);
    Route::put('/certificate/{certificate}', [PortfolioController::class, 'updateCertificate']);
    Route::delete('/certificate/{certificate}', [PortfolioController::class, 'deleteCertificate']);

    Route::post('/project', [PortfolioController::class, 'storeProject']);
    Route::put('/project/{project}', [PortfolioController::class, 'updateProject']);
    Route::delete('/project/{project}', [PortfolioController::class, 'deleteProject']);

    Route::put('/profile', [PortfolioController::class, 'updateProfile']);
});
