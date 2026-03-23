<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController; // ይህን መጨመርህን አረጋግጥ
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ዋናው የፖርትፎሊዮ ገጽ
Route::get('/', function () {
    return view('welcome');
});

// የዳታቤዝ ምዝገባ (Contact Form Store) - ይህ ለማንም ክፍት መሆን አለበት
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// የዳሽቦርድ ገጽ
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ሎጊን ላደረገ ሰው ብቻ የሚፈቀዱ መንገዶች (Auth Middleware)
Route::middleware('auth')->group(function () {

    // የፕሮፋይል ማስተካከያ (Breeze ያመጣው)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // --- አዲሶቹ የAdmin መንገዶች እዚህ ጋር ገቡ ---
    Route::get('/admin/messages', [ContactController::class, 'index'])->name('admin.messages');
    Route::delete('/admin/messages/{id}', [ContactController::class, 'destroy'])->name('admin.messages.destroy');
});

require __DIR__.'/auth.php';
