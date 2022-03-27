<?php

namespace GeekBrains\Blog\Commands;

use GeekBrains\Blog\Repositories\PostsRepositoryInterface;
use GeekBrains\Blog\Post;

class CreatePostCommand implements CommandInterface
{
    public function __construct(
        private PostsRepositoryInterface $postsRepository
    ) {}

    public function handle(Arguments $arguments): void
    { 
        $this->postsRepository->save(new Post(
            0,
            $arguments->get('author_id'), 
            $arguments->get('title'), 
            $arguments->get('text')
        ));
    }
}