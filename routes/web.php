<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\EnsureOwnerEmail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    return redirect()->route('home');
})->name('contact.show');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware(['auth', EnsureOwnerEmail::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/messages', [ContactController::class, 'index'])->name('admin.messages');
    Route::delete('/admin/messages/{id}', [ContactController::class, 'destroy'])->name('admin.messages.destroy');
});

require __DIR__.'/auth.php';