<?php

namespace GeekBrains\Blog;

use DateTimeImmutable;

class User
{
    public function __construct(
        private int $id,
        private Name $name,
        // private DateTimeImmutable $registeredOn
    ) {}

    public function getName() {
        return $this->name;
    }

    public function __toString()
    {
        // return sprintf('[%d] %s (на сайте с %s)', 
            // $this->id, $this->name, $this->registeredOn->format('Y-m-d'));
        return sprintf('[%d] %s', 
            $this->id, $this->name);
    }
}