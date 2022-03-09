<?php

require_once 'vendor/autoload.php';

use App\Factories\EntityFactory;
use App\Exceptions\MatchException;

try {
    echo EntityFactory::getInstance()->create($argv[1]);
} catch (MatchException $e) {
    var_dump($e->getMessage());
}