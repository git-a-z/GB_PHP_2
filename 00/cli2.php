<?php

require_once 'vendor/autoload.php';

use App\Repositories\MemoryUserRepository;
use App\Entities\User\User;
use App\Exceptions\UserNotFoundException;

//Создаём объект репозитория
$userRepository = new MemoryUserRepository();

//Добавляем в репозиторий несколько пользователей
$userRepository->save(new User(123, 'Ivan', 'Nikitin'));
$userRepository->save(new User(234, 'Anna', 'Petrova'));

try {
    //Загружаем пользователя из репозитория
    $user = $userRepository->get(123);
    print $user;
} catch (UserNotFoundException $e) {
    print $e->getMessage();
}