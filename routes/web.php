
<?php

use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ExternalPostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['posts' => Post::with('user')->latest()->get()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
});

Route::get('/external-posts', [ExternalPostController::class, 'index'])->name('external-posts.index');
Route::get('/external-posts/fetch', [ExternalPostController::class, 'fetchAndStore'])->name('external-posts.fetch');

require __DIR__.'/auth.php';
