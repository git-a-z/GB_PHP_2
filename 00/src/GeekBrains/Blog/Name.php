<?php

namespace GeekBrains\Blog;

class Name
{
    public function __construct(
        private string $firstName,
        private string $lastName
    ) {}

    public function getfirstName() {
        return $this->firstName;
    }

    public function getlastName() {
        return $this->lastName;
    }

    public function __toString()
    {
        return sprintf('%s %s', $this->firstName, $this->lastName);
    }
}