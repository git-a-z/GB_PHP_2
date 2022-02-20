<?php

namespace GeekBrains\Blog;

use GeekBrains\Person\Person;

class Comment
{
    public function __construct(
        private Person $author,
        private Post $post,
        private string $text
    ) {}

    public function __toString()
    {
        return $this->author . ' комментирует статью ( ' . $this->post . ' ) — ' . $this->text;
    }
}