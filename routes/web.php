<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return Auth::check()
        ? view('layouts.homepage')  
        : view('layouts.homepage');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/pengajuan', function () { return view('layouts.sections.pengajuan'); })->name('pengajuan');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
