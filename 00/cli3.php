<?php

use App\Enums\Argument;
use App\Exceptions\UserNotFoundException;
use App\Factories\EntityFactory;
use App\Factories\RepositoryFactory;
use App\Connections\SqlLiteConnector;

$user = EntityFactory::getInstance()->create(Argument::USER);

$connector = new SqlLiteConnector;
$factory = new RepositoryFactory($connector);
$entityRepository = $factory->create($user);

$entityRepository->save($user);

try {
    $entityRepository->get(12312312312312);
}catch (UserNotFoundException $e)
{
    echo $e->getMessage();
}




