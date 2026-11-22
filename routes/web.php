<?php
use App\Http\Middleware\EnsureOwnerEmail;
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
Route::get('/contact', function () {
    return redirect()->route('home');
})->name('contact.show');

// ሰዎች መልዕክት እንዲልኩ የሚያስችለው (Contact Form Submit)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// 3. ለባለቤቱ (ለአንተ) ብቻ የሚፈቀዱ የDashboard እና የAdmin ስራዎች
Route::middleware(['auth', function ($request, $next) {
    $allowedEmail = 'YOUR_NEW_EMAIL@gmail.com';

    if (strtolower(trim($request->user()->email)) !== strtolower(trim($allowedEmail))) {
        abort(403, 'Unauthorized access.');
    }

    return $next($request);
}])->group(function () {

    // ዳሽቦርድ (ለአንተ ብቻ)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

    // የፕሮፋይል ማስተካከያ
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // የመጡልህን መልዕክቶች ለማየትና ለማጥፋት
    Route::get('/admin/messages', [ContactController::class, 'index'])->name('admin.messages');
    Route::delete('/admin/messages/{id}', [ContactController::class, 'destroy'])->name('admin.messages.destroy');
});

require __DIR__.'/auth.php';