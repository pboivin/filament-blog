<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog', function () {
    return view('post_index');
})->name('post.index');

Route::get('/blog/{slug}', function ($slug) {
    return view('post_show', ['slug' => $slug]);
})->name('post.show');
