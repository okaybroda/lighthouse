<?php

use Tests\Utils\Models\Post;
use Tests\Utils\Models\User;
use Faker\Generator as Faker;
use Tests\Utils\Models\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->sentence,
        'user_id' => function () {
            return factory(User::class)->create()->getKey();
        },
        'post_id' => function () {
            return factory(Post::class)->create()->getKey();
        },
    ];
});
