<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * Route for development users
 */
require __DIR__.'/persion/maria.php';
require __DIR__.'/persion/nur.php';
require __DIR__.'/persion/boniamin.php';
require __DIR__.'/persion/tushar.php';

/**Routes for production */
// require __DIR__.'/users.php';
// require __DIR__.'/admin.php';
// require __DIR__.'/moderator.php';
// require __DIR__.'/superadmin.php';

require __DIR__.'/auth.php';
