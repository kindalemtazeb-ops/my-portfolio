<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. የፖርትፎሊዮው ዋና ገጽ (Landing Page)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// 2. የContact Route ማስተካከያ
// ፎርሙ ያለው በዋናው ገጽ (welcome) ላይ ስለሆነ፣
// ሰዎች /contact ብለው ሲገቡ ስህተት እንዳይሰጥ ወደ ዋናው ገጽ እንመልሳቸዋለን።
Route::get('/contact', function () {
    return redirect()->route('home');
})->name('contact.show');

// ሰዎች መልዕክት እንዲልኩ የሚያስችለው (Contact Form Submit)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// 3. ዳሽቦርድ (ለአንተ ብቻ - ሎጊን ስታደርግ የምታየው)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 4. ለባለቤቱ (ለአንተ) ብቻ የሚፈቀዱ የAdmin ስራዎች
Route::middleware('auth')->group(function () {

    // የፕሮፋይል ማስተካከያ
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // የመጡልህን መልዕክቶች ለማየትና ለማጥፋት
    Route::get('/admin/messages', [ContactController::class, 'index'])->name('admin.messages');
    Route::delete('/admin/messages/{id}', [ContactController::class, 'destroy'])->name('admin.messages.destroy');
});

require __DIR__.'/auth.php';
