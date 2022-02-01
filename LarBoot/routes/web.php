<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/test', function () {
    $author = "Уинстон Черчиль";
    $phrase = "Успех- это движеие от неудаче к неудаче без потери интузиазма";
    $tasks = ["task1", "task2", "task3"];
    return view('test', compact("author", "phrase", "tasks"));
})->name("test");

Route::get('/hello/{name?}', [UserController::class, 'index'])->name("hello");

Route::resource('posts', PostController::class);

