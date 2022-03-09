<?php

namespace App\Enums;

class Argument
{
    const USER = 'user';
    const ARTICLE = 'article';
    const COMMENT = 'comment';

    public static $ARGUMENTS = [self::USER, self::ARTICLE, self::COMMENT];
}