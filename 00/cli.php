<?php

use GeekBrains\Blog\Name;
use GeekBrains\Blog\Repositories\UsersRepository\SqliteUsersRepository;
use GeekBrains\Blog\User;

require_once __DIR__ . '/vendor/autoload.php';
// require_once 'vendor/autoload.php';

//Создаём объект подключения к SQLite
$connection = new PDO('sqlite:' . __DIR__ . '/blog.sqlite');

// echo new User(123, new Name('Ivan', 'Nikitin'));

//Создаём объект репозитория
$usersRepository = new SqliteUsersRepository($connection);

//Добавляем в репозиторий несколько пользователей
$usersRepository->save(new User(123, new Name('Ivan', 'Nikitin')));
$usersRepository->save(new User(234, new Name('Anna', 'Petrova')));