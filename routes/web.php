<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'about',
        'posts' => [
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'author' => 'Pande Yogam',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, voluptates repellendus! Dolorum laudantium labore molestiae veniam voluptas ea voluptatibus nihil totam velit consequatur. Vero hic ab facere. Voluptate, unde delectus.',
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'author' => 'Pande Yogam',
                'body' => 'elit. Hic, voluptates repellendus! Dolorum laudantium labore molestiae veniam voluptas ea voluptatibus Lorem ipsum dolor sit amet consectetur adipisicing nihil totam velit consequatur. Vero hic ab facere. Voluptate, unde delectus.',
            ],
        ],
    ]);
});

Route::get('posts/{id}', function ($id) {
    $posts = [
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'author' => 'Pande Yogam',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, voluptates repellendus! Dolorum laudantium labore molestiae veniam voluptas ea voluptatibus nihil totam velit consequatur. Vero hic ab facere. Voluptate, unde delectus.',
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'author' => 'Pande Yogam',
                'body' => 'elit. Hic, voluptates repellendus! Dolorum laudantium labore molestiae veniam voluptas ea voluptatibus Lorem ipsum dolor sit amet consectetur adipisicing nihil totam velit consequatur. Vero hic ab facere. Voluptate, unde delectus.',
            ],
        ]; 
    return view();
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
