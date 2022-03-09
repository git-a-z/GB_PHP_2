<?php

namespace GeekBrains\Blog;

use GeekBrains\Person\Person;

class Post
{
    public function __construct(
        private Person $author,
        private string $title,
        private string $text
    ) {}

    public function __toString()
    {
        return sprintf('%s пишет в статье "%s" — %s', 
            $this->author, $this->title, $this->text);
    }
}