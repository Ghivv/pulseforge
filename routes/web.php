<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\ArticleController as UserArticleController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// /**
//  * Routes for Admin - Article CRUD
//  */
Route::prefix('admin')->name('admin.')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('articles', ArticleController::class);
});

// /**
//  * Routes for Users - Article Listing and Details
//  */
Route::prefix('articles')->group(function () {
    Route::get('/articles', [UserArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/{id}', [UserArticleController::class, 'show'])->name('articles.show');
});

// Routes Comment
Route::prefix('articles/{article}')->group(function () {
    Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
    Route::put('comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});

require __DIR__ . '/auth.php';
