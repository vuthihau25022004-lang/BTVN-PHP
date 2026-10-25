<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = [
        ['title' => 'Bài viết 1', 'content' => 'Nội dung bài viết 1'],
        ['title' => 'Bài viết 2', 'content' => 'Nội dung bài viết 2'],
        ['title' => 'Bài viết 3', 'content' => 'Nội dung bài viết 3'],
    ];

    return view('home', compact('posts'));
});