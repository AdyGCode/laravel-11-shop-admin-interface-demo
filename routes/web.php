<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPageController::class, 'home'])->name('home');
Route::get('/contact-us', [StaticPageController::class, 'contactUs'])->name('contact-us');

Route::get('/contact-us', [StaticPageController::class, 'contactUs'])->name('contact-us');

Route::prefix('admin')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('dashboard', [StaticPageController::class, 'adminDashboard'])
            ->name('dashboard');
        Route::get('inbox', [StaticPageController::class, 'adminDashboard'])
            ->name('admin-inbox');
    });

Route::prefix('client')
    ->middleware(['auth', 'verified'])
    ->get('dashboard', [StaticPageController::class, 'welcome'])
    ->name('client-dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**********************************************************************
 * Image Rendering Route
 *
 * Add a route that can load an image from storage based on a parameter
 **********************************************************************/
Route::get('/images/{imageName}', [ImageController::class, 'show'])
    ->name('image.show');


require __DIR__.'/auth.php';
