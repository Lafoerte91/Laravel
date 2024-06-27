<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

// admin
Route::prefix('admin')->group(function () { // группа роутов для пользователя
    Route::get('posts', [PostController::class, 'index'])->name('admin.posts.index'); // получение списка постов
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create'); // создание поста
    Route::post('posts/create', [PostController::class, 'store'])->name('admin.posts.store'); // сохранение поста
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show'); // получение конкретного поста
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit'); // редактирование поста
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update'); // обновление поста
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('admin.posts.delete'); // удаление поста
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like'); // лайк
});
