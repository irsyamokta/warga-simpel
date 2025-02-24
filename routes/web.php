<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    if (Auth::check()) {
        if (session('password_reset')) {
            session()->forget('password_reset');
            return view('layouts.homepage');
        }

        if (Auth::user()->hasVerifiedEmail()) {
            return view('layouts.homepage');
        }
        return redirect()->route('verification.notice');
    }
    return view('layouts.homepage');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/pengajuan', function () { return view('layouts.sections.pengajuan'); })->name('pengajuan');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
