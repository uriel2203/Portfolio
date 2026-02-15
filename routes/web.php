<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 980d4da (Project)
