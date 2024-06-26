<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

Route::get('posts', [PostController::class, 'index']);
Route::get('posts/{post}', [PostController::class, 'show']);
Route::post('posts/{post}/like', [PostController::class, 'like']);
