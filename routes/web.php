<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('blogs', [BlogController::class,'index'])->name('blogs');
Route::get('blogs/show/{id}', [BlogController::class,'show'])->name('blogs.show');

Route::get('blogs/single-clean', function () {
    return view('blogs/single-clean');
})->name('single-clean');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::get('products/category/{id}', [ProductController::class,'category'])->name('products.category');

require __DIR__ . '/auth.php';
