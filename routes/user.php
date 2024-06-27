<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PostController;

Route::prefix('user')->group(function () { // группа роутов для пользователя
    Route::get('posts', [PostController::class, 'index'])->name('user.posts.index'); // получение списка постов
    Route::get('posts/create', [PostController::class, 'create'])->name('user.posts.create'); // создание поста
    Route::post('posts/create', [PostController::class, 'store'])->name('user.posts.store'); // сохранение поста
    Route::get('posts/{post}', [PostController::class, 'show'])->name('user.posts.show'); // получение конкретного поста
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit'); // редактирование поста
    Route::put('posts/{post}', [PostController::class, 'update'])->name('user.posts.update'); // обновление поста
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('user.posts.delete'); // удаление поста
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('user.posts.like'); // лайк
});
