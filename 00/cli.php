<?php

require_once 'vendor/autoload.php';

use GeekBrains\Person\Name;
use GeekBrains\Person\Person;
use GeekBrains\Blog\Post;
use GeekBrains\Blog\Comment;

$faker = Faker\Factory::create();

switch ($argv[1]) {
    case 'user':
        echo getName($faker);
        break;
    case 'post':
        echo getPost($faker);
        break;
    case 'comment':
        echo getComment($faker);
        break;
}

function getName($faker) {
    return new Name($faker->name(5), $faker->lastname(10));
}

function getTitle($faker) {
    return $faker->text(10);
}

function getPostText($faker) {
    return $faker->text(30);
}

function getCommentText($faker) {
    return $faker->text(20);
}

function getPerson($faker) {
    return new Person(
        getName($faker),
        new DateTimeImmutable()
    );
}

function getPost($faker) {
    return new Post(
        getPerson($faker),
        getTitle($faker),
        getPostText($faker)
    );
}

function getComment($faker) {
    return new Comment(
        getPerson($faker),
        getPost($faker),
        getCommentText($faker)
    );
}