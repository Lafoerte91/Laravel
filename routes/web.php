<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Posts\CommentController;

Route::view('/', 'welcome');

Route::redirect('home', '/', 301);

Route::get('test', TestController::class);

Route::get('register', [RegisterController::class, 'index'])->name('register.index'); // страница регистрации
Route::post('register', [RegisterController::class, 'store'])->name('register.store'); // запрос регистрации

Route::get('login', [LoginController::class, 'index'])->name('login.index'); // страница  входа
Route::post('login', [LoginController::class, 'store'])->name('login.store'); // запрос входа

//CRUD
Route::get('posts', [PostController::class, 'index'])->name('posts.index'); // получение списка постов
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create'); // создание поста
Route::post('posts/create', [PostController::class, 'store'])->name('posts.store'); // сохранение поста
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show'); // получение конкретного поста
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); // редактирование поста
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update'); // обновление поста
Route::delete('posts/{post}', [PostController::class, 'delete'])->name('posts.delete'); // удаление поста
Route::put('posts/{post}/like', [PostController::class, 'like'])->name('posts.like'); // лайк
Route::resource('posts/{post}/comments', CommentController::class)->onlly([ 'index', 'show']); // оставить только перечисленные роуты



Route::fallback(function () {
    return 'Fallback';
});
