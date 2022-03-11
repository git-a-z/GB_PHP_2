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
        return $this->author . ': ' . $this->title . ' ' . $this->text;
    }
}