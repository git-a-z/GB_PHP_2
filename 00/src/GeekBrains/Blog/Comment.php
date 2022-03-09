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
        return sprintf('%s комментирует статью ( %s ) — %s', 
            $this->author, $this->post, $this->text);
    }
}