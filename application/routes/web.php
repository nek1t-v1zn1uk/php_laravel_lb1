<?php

use App\Http\Controllers\LabController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('query.mode')->group(function () {
    Route::get('/lab', [LabController::class, 'index'])->name('lab.index');
    Route::get('/about', [LabController::class, 'about'])->name('lab.about');
    Route::get('/status', [LabController::class, 'status'])->name('lab.status');
    Route::get('/echo', [LabController::class, 'echo'])->name('lab.echo');
});
