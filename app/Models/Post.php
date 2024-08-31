<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post
{
    use HasFactory;

    public static function all()
    {
        return [
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
    }

    public static function find($slug):array{
        $post =  Arr::first(static::all(), function ($post) use ($slug) {
            return $post["slug"] == $slug;
        });

        if(!$post){
            abort(404);
        }
        return  $post;
    }
}
