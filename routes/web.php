<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('layouts.homepage');
})->middleware(['auth', 'verified'])->name('home');

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
