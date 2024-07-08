<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BlogController;

Route::view('/', 'welcome')->name('home');

Route::redirect('home', '/', 301)->name('home.redirect');

Route::get('test', TestController::class)->name('test')->middleware('log');

Route::middleware('guest')->group(function() {
    Route::get('register', [RegisterController::class, 'index'])->name('register.index'); // страница регистрации
    Route::post('register', [RegisterController::class, 'store'])->name('register.store'); // запрос регистрации

    Route::get('login', [LoginController::class, 'index'])->name('login.index')->withoutMiddleware('guest'); // страница  входа
    Route::post('login', [LoginController::class, 'store'])->name('login.store'); // запрос входа
});

// blog
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');


Route::resource('posts/{post}/comments', CommentController::class)->only([ 'index', 'show']); // оставить только перечисленные роуты

