<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'title' => 'Post 1',
            'slug' => 'post-1',
            'author' => 'Maulana Muhammad',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam aut dolor dolorum excepturi explicabo harum, illum in incidunt iusto nam nemo quas quos sequi temporibus totam, ullam? Accusamus blanditiis cupiditate dolore dolorum ex facere fugit harum ipsam ipsum libero modi nam nobis officia optio, placeat quibusdam, suscipit tempore voluptate! A animi dicta dolor eaque eligendi error, excepturi id maiores nobis similique sunt temporibus ullam. A aperiam atque consequatur cumque dicta distinctio dolore explicabo itaque nobis officia pariatur, recusandae saepe veniam. Assumenda autem dignissimos dolorum enim error fuga fugiat, hic illum iste laborum libero magnam non, perspiciatis quam soluta suscipit.'
        ],
        [
            'title' => 'Post 2',
            'slug' => 'post-2',
            'author' => 'Nur Rahma Anwar',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam aut dolor dolorum excepturi explicabo harum, illum in incidunt iusto nam nemo quas quos sequi temporibus totam, ullam? Accusamus blanditiis cupiditate dolore dolorum ex facere fugit harum ipsam ipsum libero modi nam nobis officia optio, placeat quibusdam, suscipit tempore voluptate! A animi dicta do'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'title' => 'Post 1',
            'slug' => 'post-1',
            'author' => 'Maulana Muhammad',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam aut dolor dolorum excepturi explicabo harum, illum in incidunt iusto nam nemo quas quos sequi temporibus totam, ullam? Accusamus blanditiis cupiditate dolore dolorum ex facere fugit harum ipsam ipsum libero modi nam nobis officia optio, placeat quibusdam, suscipit tempore voluptate! A animi dicta dolor eaque eligendi error, excepturi id maiores nobis similique sunt temporibus ullam. A aperiam atque consequatur cumque dicta distinctio dolore explicabo itaque nobis officia pariatur, recusandae saepe veniam. Assumenda autem dignissimos dolorum enim error fuga fugiat, hic illum iste laborum libero magnam non, perspiciatis quam soluta suscipit.'
        ],
        [
            'title' => 'Post 2',
            'slug' => 'post-2',
            'author' => 'Nur Rahma Anwar',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam aut dolor dolorum excepturi explicabo harum, illum in incidunt iusto nam nemo quas quos sequi temporibus totam, ullam? Accusamus blanditiis cupiditate dolore dolorum ex facere fugit harum ipsam ipsum libero modi nam nobis officia optio, placeat quibusdam, suscipit tempore voluptate! A animi dicta do'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post["slug"] == $slug;
    });

    return view('post', ['title' => 'Detail Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
