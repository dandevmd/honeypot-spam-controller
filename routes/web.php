<?php

use App\Models\Post;
use App\Honeypot\HoneypotMiddleware;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/create', function () {
    return view('post.create');
})->middleware('auth')->name('post.create');

Route::post('/post/store', function () {


    Post::create(
        request()->validate([
            'title' => 'required',
            'body' => 'required',
        ])
    );

    return redirect('/dashboard');
})->middleware(['auth', HoneypotMiddleware::class])->name('post.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';